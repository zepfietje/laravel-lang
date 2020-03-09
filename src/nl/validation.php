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

    'accepted' => ':Attribute moet geaccepteerd zijn.',
    'active_url' => ':Attribute is geen geldige URL.',
    'after' => ':Attribute moet een datum na :date zijn.',
    'after_or_equal' => ':Attribute moet een datum na of gelijk aan :date zijn.',
    'alpha' => ':Attribute mag alleen letters bevatten.',
    'alpha_dash' => ':Attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
    'alpha_num' => ':Attribute mag alleen letters en cijfers bevatten.',
    'array' => ':Attribute moet een reeks zijn.',
    'before' => ':Attribute moet een datum voor :date zijn.',
    'before_or_equal' => ':Attribute moet een datum voor of gelijk aan :date zijn.',
    'between' => [
        'numeric' => ':Attribute moet tussen :min en :max liggen.',
        'file' => ':Attribute moet tussen :min en :max kilobytes zijn.',
        'string' => ':Attribute moet tussen :min en :max tekens zijn.',
        'array' => ':Attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean' => ':Attribute moet waar of onwaar zijn.',
    'confirmed' => ':Attribute bevestiging komt niet overeen.',
    'date' => ':Attribute is geen geldige datum.',
    'date_equals' => ':Attribute moet een datum gelijk aan :date zijn.',
    'date_format' => ':Attribute komt niet overeen met het formaat :format.',
    'different' => ':Attribute en :other moeten verschillend zijn.',
    'digits' => ':Attribute moet :digits cijfers zijn.',
    'digits_between' => ':Attribute moet tussen :min en :max cijfers zijn.',
    'dimensions' => ':Attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => ':Attribute heeft een dubbele waarde.',
    'email' => ':Attribute moet een geldig e-mailadres zijn.',
    'ends_with' => ':Attribute moet eindigen met een van de volgende: :values.',
    'exists' => 'Gekozen :attribute is ongeldig.',
    'file' => ':Attribute moet een bestand zijn.',
    'filled' => ':Attribute moet een waarde hebben.',
    'gt' => [
        'numeric' => ':Attribute moet groter zijn dan :value.',
        'file' => ':Attribute moet groter zijn dan :value kilobytes.',
        'string' => ':Attribute moet langer dan :value tekens zijn.',
        'array' => ':Attribute moet meer dan :value items bevatten.',
    ],
    'gte' => [
        'numeric' => ':Attribute moet groter dan of gelijk aan :value zijn.',
        'file' => ':Attribute moet groter dan of gelijk aan :value kilobytes zijn.',
        'string' => ':Attribute moet :value tekens of langer zijn.',
        'array' => ':Attribute moet :value of meer items bevatten.',
    ],
    'image' => ':Attribute moet een afbeelding zijn.',
    'in' => 'Gekozen :attribute is ongeldig.',
    'in_array' => ':Attribute bestaat niet in :other.',
    'integer' => ':Attribute moet een geheel getal zijn.',
    'ip' => ':Attribute moet een geldig IP-adres zijn.',
    'ipv4' => ':Attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => ':Attribute moet een geldig IPv6-adres zijn.',
    'json' => ':Attribute moet een geldige JSON-string zijn.',
    'lt' => [
        'numeric' => ':Attribute moet kleiner zijn dan :value.',
        'file' => ':Attribute moet kleiner zijn dan :value kilobytes.',
        'string' => ':Attribute moet korter dan :value tekens zijn.',
        'array' => ':Attribute moet minder dan :value items bevatten.',
    ],
    'lte' => [
        'numeric' => ':Attribute moet kleiner dan of gelijk aan :value zijn.',
        'file' => ':Attribute moet kleiner dan of gelijk aan :value kilobytes zijn.',
        'string' => ':Attribute moet :value tekens of korter zijn.',
        'array' => ':Attribute moet niet meer dan :value items bevatten.',
    ],
    'max' => [
        'numeric' => ':Attribute mag niet groter zijn dan :max.',
        'file' => ':Attribute mag niet groter zijn dan :max kilobytes.',
        'string' => ':Attribute mag niet langer zijn dan :max tekens.',
        'array' => ':Attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes' => ':Attribute moet een bestand zijn van type: :values.',
    'mimetypes' => ':Attribute moet een bestand zijn van type: :values.',
    'min' => [
        'numeric' => ':Attribute moet minimaal :min zijn.',
        'file' => ':Attribute moet minimaal :min kilobytes zijn.',
        'string' => ':Attribute moet minimaal :min tekens zijn.',
        'array' => ':Attribute moet minimaal :min items bevatten.',
    ],
    'not_in' => 'Gekozen :attribute is ongeldig.',
    'not_regex' => 'Formaat van :attribute is ongeldig.',
    'numeric' => ':Attribute moet een cijfer zijn.',
    'password' => 'Het wachtwoord is onjuist.',
    'present' => ':Attribute moet aanwezig zijn.',
    'regex' => 'Formaat van :attribute is ongeldig.',
    'required' => ':Attribute is verplicht.',
    'required_if' => ':Attribute is verplicht als :other gelijk is aan :value.',
    'required_unless' => ':Attribute is verplicht tenzij :other gelijk is aan :values.',
    'required_with' => ':Attribute is verplicht als :values aanwezig is.',
    'required_with_all' => ':Attribute is verplicht als :values aanwezig zijn.',
    'required_without' => ':Attribute is verplicht als :values niet aanwezig is.',
    'required_without_all' => ':Attribute is verplicht als geen van :values aanwezig is.',
    'same' => ':Attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => ':Attribute moet :size zijn.',
        'file' => ':Attribute moet :size kilobytes zijn.',
        'string' => ':Attribute moet :size tekens zijn.',
        'array' => ':Attribute moet :size items bevatten.',
    ],
    'starts_with' => ':Attribute moet beginnen met een van de volgende: :values.',
    'string' => ':Attribute moet tekst zijn.',
    'timezone' => ':Attribute moet een geldige zone zijn.',
    'unique' => ':Attribute is al in gebruik.',
    'uploaded' => 'Uploaden van :attribute is mislukt.',
    'url' => 'Formaat van :attribute is ongeldig.',
    'uuid' => ':Attribute moet een geldig UUID zijn.',

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
