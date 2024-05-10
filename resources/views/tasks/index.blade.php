<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4" id="tasks-container">
    <h1 class="text-3xl font-semibold mb-4">Your Tasks</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($tasks as $task)
        <div class="bg-white rounded-lg shadow-md p-4 wkBox z-50" data-id="{{ $task->id }}">
            <h2 class="text-lg font-semibold">{{ Str::limit($task->title, 15) }}</h2>
            <p class="mt-2 text-sm text-gray-600">{{ Str::limit($task->description, 120, '...') }}</p>
            <div class="flex justify-between items-center mt-2">
                <div class="flex items-center space-x-2">
                    <span class="text-xs text-gray-500">Created: {{ $task->created_at->diffForHumans() }}</span>
                    <span class="text-xs text-gray-500">Updated: {{ $task->updated_at->diffForHumans() }}</span>
                </div>
                @if($task->completed)
                <span class="px-2 py-1 bg-green-500 text-white rounded-full text-xs">Completed</span>
                @else
                <span class="px-2 py-1 bg-red-500 text-white rounded-full text-xs">Incomplete</span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    {{ $tasks->withQueryString()->links() }}
</div>
<div id="archive-area" class="fixed bottom-0 left-0 w-full h-1/3 bg-gray-200 border-t border-gray-300 flex justify-center items-center hidden">
    ここにドラッグしてアーカイブ
</div>
<script type="text/javascript">
    $(function() {
        var taskId;
        $(".wkBox").on('dragstart', function() {
            $("#archive-area").removeClass('hidden');
            taskId = $(this).data('id');
        });
        $(".wkBox").on('dragstop', function() {
            $("#archive-area").addClass('hidden');
        });
        $(".wkBox").draggable({
            revert: 'invalid' // ドロップされなかった場合に元の位置に戻る
        });
        $("#archive-area").droppable({
            drop: function(event, ui) {
                if (confirm('アーカイブしますか？')) {
                    console.log(taskId);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/dashboard', // データを送信するエンドポイントのURL
                        method: 'POST',
                        data: {
                            id: taskId
                        },
                        success: function(response) {
                            alert('アーカイブしました！');
                            $('#tasks-container').html(response.html);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            alert('アーカイブに失敗しました。エラーが発生しました。');
                        }
                    });
                }
            }
        });
    });
</script>
@endsection
