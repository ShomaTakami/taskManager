<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeは承認されている必要があります。',
    'accepted_if' => ':otherが:valueの場合、:attributeは承認されている必要があります。',
    'active_url' => ':attributeは有効なURLである必要があります。',
    'after' => ':attributeは:dateより後の日付である必要があります。',
    'after_or_equal' => ':attributeは:dateと同じかそれ以降の日付である必要があります。',
    'alpha' => ':attributeは文字のみ含めることができます。',
    'alpha_dash' => ':attributeは文字、数字、ダッシュ、アンダースコアのみ含めることができます。',
    'alpha_num' => ':attributeは文字と数字のみ含めることができます。',
    'array' => ':attributeは配列である必要があります。',
    'ascii' => ':attributeは半角英数字および記号のみ含めることができます。',
    'before' => ':attributeは:dateより前の日付である必要があります。',
    'before_or_equal' => ':attributeは:dateと同じかそれ以前の日付である必要があります。',
    'between' => [
        'array' => ':attributeは:minから:max個の要素を持つ必要があります。',
        'file' => ':attributeは:minから:maxキロバイトの間である必要があります。',
        'numeric' => ':attributeは:minから:maxの間である必要があります。',
        'string' => ':attributeは:minから:max文字の間である必要があります。',
    ],
    'boolean' => ':attributeはtrueまたはfalseである必要があります。',
    'can' => ':attributeは許可されていない値を含んでいます。',
    'confirmed' => ':attributeは確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',

    'date' => ':attributeは有効な日付である必要があります。',
    'date_equals' => ':attributeは:dateと等しい日付である必要があります。',
    'date_format' => ':attributeはフォーマット:formatと一致する必要があります。',
    'decimal' => ':attributeは小数点以下:decimal桁である必要があります。',
    'declined' => ':attributeは拒否されている必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeは拒否されている必要があります。',
    'different' => ':attributeと:otherは異なる必要があります。',
    'digits' => ':attributeは:digits桁である必要があります。',
    'digits_between' => ':attributeは:minから:max桁の間である必要があります。',
    'dimensions' => ':attributeの寸法が無効です。',
    'distinct' => ':attributeには重複した値があります。',
    'doesnt_end_with' => ':attributeは以下のいずれかで終わっていてはいけません: :values。',
    'doesnt_start_with' => ':attributeは以下のいずれかで始まっていてはいけません: :values。',
    'email' => ':attributeは有効なメールアドレスである必要があります。',
    'ends_with' => ':attributeは以下のいずれかで終わる必要があります: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeは次の拡張子のいずれかである必要があります: :values。',
    'file' => ':attributeはファイルである必要があります。',
    'filled' => ':attributeには値が必要です。',
    'gt' => [
        'array' => ':attributeは:value個以上のアイテムを持っている必要があります。',
        'file' => ':attributeは:valueキロバイトより大きくなければなりません。',
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'string' => ':attributeは:value文字より大きくなければなりません。',
    ],

    'gte' => [
        'array' => ':attributeは:value個以上のアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイト以上である必要があります。',
        'numeric' => ':attributeは:value以上である必要があります。',
        'string' => ':attributeは:value文字以上である必要があります。',
    ],
    'hex_color' => ':attributeは有効な16進カラーである必要があります。',
    'image' => ':attributeは画像である必要があります。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeは:otherに存在する必要があります。',
    'integer' => ':attributeは整数である必要があります。',
    'ip' => ':attributeは有効なIPアドレスである必要があります。',
    'ipv4' => ':attributeは有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attributeは有効なIPv6アドレスである必要があります。',
    'json' => ':attributeは有効なJSON文字列である必要があります。',
    'lowercase' => ':attributeは小文字である必要があります。',
    'lt' => [
        'array' => ':attributeは:value個未満のアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイト未満である必要があります。',
        'numeric' => ':attributeは:value未満である必要があります。',
        'string' => ':attributeは:value文字未満である必要があります。',
    ],
    'lte' => [
        'array' => ':attributeは:value個以上のアイテムを持つことはできません。',
        'file' => ':attributeは:valueキロバイト以下である必要があります。',
        'numeric' => ':attributeは:value以下である必要があります。',
        'string' => ':attributeは:value文字以下である必要があります。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attributeは:max個以上のアイテムを持つことはできません。',
        'file' => ':attributeは:maxキロバイトを超えることはできません。',
        'numeric' => ':attributeは:maxを超えることはできません。',
        'string' => ':attributeは:max文字を超えることはできません。',
    ],
    'max_digits' => ':attributeは:max桁を超えることはできません。',
    'mimes' => ':attributeは以下のタイプのファイルである必要があります: :values。',
    'mimetypes' => ':attributeは以下のタイプのファイルである必要があります: :values。',
    'min' => [
        'array' => ':attributeは少なくとも:min個のアイテムを持つ必要があります。',
        'file' => ':attributeは少なくとも:minキロバイト以上である必要があります。',
        'numeric' => ':attributeは少なくとも:min以上である必要があります。',
        'string' => ':attributeは少なくとも:min文字以上である必要があります。',
    ],
    'min_digits' => ':attributeは少なくとも:min桁である必要があります。',
    'missing' => ':attributeは欠落しています。',
    'missing_if' => ':otherが:valueの場合、:attributeは欠落している必要があります。',
    'missing_unless' => ':otherが:valueでない限り、:attributeは欠落している必要があります。',
    'missing_with' => ':valuesが存在する場合、:attributeは欠落している必要があります。',
    'missing_with_all' => ':valuesが存在する場合、:attributeは欠落している必要があります。',
    'multiple_of' => ':attributeは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値である必要があります。',
    'password' => [
        'letters' => ':attributeには少なくとも1つの文字を含める必要があります。',
        'mixed' => ':attributeには少なくとも1つの大文字と1つの小文字を含める必要があります。',
        'numbers' => ':attributeには少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attributeには少なくとも1つの記号を含める必要があります。',
        'uncompromised' => '与えられた:attributeはデータリークに現れました。別の:attributeを選択してください。',
    ],

    'present' => ':attributeは存在する必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeは存在する必要があります。',
    'present_unless' => ':otherが:valueでない限り、:attributeは存在する必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeは存在する必要があります。',
    'present_with_all' => ':valuesが存在する場合、:attributeは存在する必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれていない場合、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherが存在しないことを禁止しています。',
    'regex' => ':attributeフィールドの形式が無効です。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attributeフィールドには、次のエントリが含まれている必要があります: :values。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_if_accepted' => ':otherが受け入れられる場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesに含まれていない場合、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeフィールドは:otherと一致する必要があります。',
    'size' => [
        'array' => ':attributeフィールドには:size個のアイテムが含まれている必要があります。',
        'file' => ':attributeフィールドは:sizeキロバイトでなければなりません。',
        'numeric' => ':attributeフィールドは:sizeでなければなりません。',
        'string' => ':attributeフィールドは:size文字でなければなりません。',
    ],
    'starts_with' => ':attributeフィールドは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeフィールドは文字列でなければなりません。',
    'timezone' => ':attributeフィールドは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeフィールドは大文字である必要があります。',
    'url' => ':attributeフィールドは有効なURLでなければなりません。',
    'ulid' => ':attributeフィールドは有効なULIDである必要があります。',
    'uuid' => ':attributeフィールドは有効なUUIDである必要があります。',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
