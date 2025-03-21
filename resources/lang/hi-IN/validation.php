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

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'accepted_if' => ':other :value होने पर :attribute स्वीकार किया जाना चाहिए।',
    'active_url' => ':attribute एक मान्य URL नहीं है।',
    'after' => ':attribute, :date के बाद की एक तारीख होनी चाहिए।',
    'after_or_equal' => ':attribute के बराबर या उसके बाद की :date होनी चाहिए।',
    'alpha' => ':attribute में केवल अक्षर हो सकते हैं।',
    'alpha_dash' => ':attribute में केवल अक्षर, संख्या, और डैश हो सकते हैं।',
    'alpha_num' => ':attribute में केवल अक्षर और संख्याएं हो सकती हैं।',
    'array' => ':attribute एक सरणी होनी चाहिए।',
    'before' => ':attribute, :date से पहले की एक तारीख होनी चाहिए।',
    'before_or_equal' => ':attribute के बराबर या उसके पहले की :date होनी चाहिए।',
    'between' => [
        'array' => ':attribute, :min और :max वस्तुओ के बीच होनी चाहिए।',
        'file' => ':attribute, :min और :max किलोबाइट के बीच होना चाहिए।',
        'numeric' => ':attribute, :min और :max के बीच होना चाहिए।',
        'string' => ':attribute, :min और :max वर्णों के बीच होना चाहिए।',
    ],
    'boolean' => ':attribute फील्ड सही या गलत होना चाहिए।',
    'confirmed' => ':attribute पुष्टिकरण मेल नहीं खा रहा है।',
    'current_password' => 'पासवर्ड ग़लत है',
    'date' => ':attribute एक मान्य तारीख नहीं है।',
    'date_equals' => ':attribute तारीख :date के बराबर होना चाहिए।',
    'date_format' => ':attribute फॉर्मेट :format से मेल नहीं खा रहा है।',
    'declined' => ':attribute अस्वीकृत किया जाना चाहिए।',
    'declined_if' => ':other :value होने पर :attribute को अस्वीकार कर दिया जाना चाहिए।',
    'different' => ':attribute और :other <strong>अलग</strong> होना चाहिए।',
    'digits' => ':attribute, :digits अंक होना चाहिए।',
    'digits_between' => ':attribute, :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute में अमान्य छवि पैमाना हैं।',
    'distinct' => ':attribute फील्ड का एक डुप्लिकेट मान होता है।',
    'doesnt_start_with' => ':attribute निम्न में से किसी एक से प्रारंभ नहीं हो सकता है: :values.',
    'double' => ':attribute  एक वैध डबल होना चाहिए.',
    'email' => ':attribute एक मान्य <strong>ईमेल पता</strong> होना चाहिए।',
    'ends_with' => ':attribute को निम्न में से किसी एक के साथ समाप्त होना चाहिए: :values',
    'enum' => 'चुना गया :attribute अमान्य है।',
    'exists' => 'चुना गया :attribute अमान्य है।',
    'file' => ':attribute <strong>फ़ाइल</strong> होना चाहिए।',
    'filled' => ':attribute फ़ील्ड में <strong>मान</strong> होना चाहिए।',
    'gt' => [
        'array' => ':attribute में :value से अधिक आइटम होने चाहिए।',
        'file' => ':attribute :value किलोबाइट से अधिक होनी चाहिए।',
        'numeric' => ':attribute :value से अधिक होनी चाहिए।',
        'string' => ':attribute :value  वर्णों से बड़ा होना चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute में :value या अधिक आइटम होने चाहिए।',
        'file' => ':attribute :value किलोबाइट से बड़ा या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute :value से बड़ा या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value वर्णों से बड़ा या उसके बराबर होना चाहिए।',
    ],
    'image' => ':attribute एक <strong>छवि</strong> होना चाहिए।',
    'in' => 'चुना गया :attribute अमान्य है।',
    'in_array' => ':attribute फील्ड, :other में मौजूद नहीं है।',
    'integer' => ':attribute एक <strong>पूर्णांक</strong> होनी चाहिए।',
    'ip' => ':attribute एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute एक मान्य JSON स्ट्रिंग होना चाहिए।',
    'lt' => [
        'array' => ':attribute में :value से कम आइटम होने चाहिए।',
        'file' => ':attribute :value किलोबाइट से कम होना चाहिए।',
        'numeric' => ':attribute :value से कम होना चाहिए।',
        'string' => ':attribute :value  वर्णों से कम होनी चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute में :value आइटम से अधिक नहीं होना चाहिए।',
        'file' => ':attribute :value किलोबाइट से कम या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute :value से कम या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value वर्णों से कम या बराबर होनी चाहिए।',
    ],
    'mac_address' => ':attribute एक मान्य MAC पता होना चाहिए।',
    'max' => [
        'array' => ':attribute, :max आइटमों से अधिक नहीं हो सकता है।',
        'file' => ':attribute :max किलोबाइट से बड़ा नहीं हो सकता है।',
        'numeric' => ':attribute, :max से बड़ा नहीं हो सकता है।',
        'string' => ':attribute, :max वर्णों से बड़ा नहीं हो सकता है।',
    ],
    'mimes' => ':attribute एक प्रकार की फ़ाइल: :values होना चाहिए।',
    'mimetypes' => ':attribute एक प्रकार की फ़ाइल :values होना चाहिए।',
    'min' => [
        'array' => ':attribute कम से कम :min आइटम होना चाहिए।',
        'file' => ':attribute कम से कम :min किलोबाइट होना चाहिए।',
        'numeric' => ':attribute कम से कम :min होना चाहिए।',
        'string' => ':attribute कम से कम :min वर्ण होना चाहिए।',
    ],
    'multiple_of' => ':attribute :value की गुणज होनी चाहिए।',
    'not_in' => 'चुना गया :attribute अमान्य है।',
    'not_regex' => ':attribute प्रारूप अमान्य है।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'password' => [
        'letters' => ':attribute में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute में कम से कम एक अपरकेस और एक लोअरकेस अक्षर होना चाहिए।',
        'numbers' => ':attribute में कम से कम एक नंबर होना चाहिए।',
        'symbols' => ':attribute में कम से कम एक प्रतीक(सिम्बोल) होना चाहिए।',
        'uncompromised' => 'दिया गया :attribute एक डेटा लीक में सामने आया है। कृपया कोई दूसरा :attribute चुनें.',
    ],
    'present' => ':attribute फ़ील्ड <strong>उपस्थित</strong> होना चाहिए।',
    'prohibited' => ':attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if' => ':attribute फ़ील्ड निषिद्ध है जब :other :value है।',
    'prohibited_unless' => ':attribute फ़ील्ड निषिद्ध है जब तक कि :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को उपस्थित होने से रोकता है।',
    'regex' => ':attribute प्रारूप <strong>अमान्य</strong> है।',
    'required' => ':attribute फ़ील्ड <strong>आवश्यक</strong> है।',
    'required_array_keys' => ':attribute फ़ील्ड में निम्न के लिए प्रविष्टियां होनी चाहिए: :values.',
    'required_if' => ':attribute फ़ील्ड आवश्यक होता है जब :other :value होता है।',
    'required_unless' => ':attribute फील्ड आवश्यक होता है जब :other, :values में नहीं होता है।',
    'required_with' => ':attribute फ़ील्ड आवश्यक होता है जब :values मौजूद होता है।',
    'required_with_all' => ':attribute फ़ील्ड आवश्यक होता है जब :values मौजूद होता है।',
    'required_without' => ':attribute फील्ड आवश्यक होता है जब :values मौजूद नहीं होता है।',
    'required_without_all' => ':attribute फील्ड आवश्यक होता है जब एक भी :values मौजूद नहीं होता है।',
    'same' => ':attribute और :other मेल खाना चाहिए।',
    'size' => [
        'array' => ':attribute में :size आइटम होने चाहिए।',
        'file' => ':attribute, :size किलोबाइट होना चाहिए।',
        'numeric' => ':attribute, :size होना चाहिए।',
        'string' => ':attribute <strong>:size वर्ण</strong> होना चाहिए।',
    ],
    'starts_with' => ':attribute निम्न में से किसी एक से शुरू होना चाहिए: :values.',
    'string' => ':attribute का <strong>स्ट्रिंग</strong> होना चाहिए।',
    'timezone' => ':attribute एक मान्य क्षेत्र होना चाहिए।',
    'unique' => ':attribute पहले से ही <strong>लिया गया</strong> है।',
    'uploaded' => 'अपलोड करने के लिए :attribute <strong> विफल </strong> हो गया  है।',
    'url' => ':attribute प्रारूप <strong>अमान्य</strong> है।',
    'uuid' => ':attribute एक मान्य UUID होना चाहिए।',

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
            'rule-name' => 'अनुकूल-संदेश',
        ],
        'invalid_currency'      => ':attribute कोड अमान्य है।',
        'invalid_amount'        => 'राशि :attribute अमान्य है।',
        'invalid_extension'     => 'फ़ाइल एक्सटेंशन अमान्य है।',
        'invalid_dimension'     => ':attribute आयाम अधिकतम :width px :height px होना चाहिए।',
        'invalid_colour'        => ':attribute कलर अमान्य है।',
        'invalid_payment_method'=> 'भुगतान विधि अमान्य है.',
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
