<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'af'|'sq'|'ar'|'hy'|'eu'|'bn'|'bg'|'ca'|'zh'|'hr'|'cs'|'da'|'nl'|'en'|'et'|'fi'|'fr'|'de'|'el'|'gu'|'he'|'hi'|'hu'|'is'|'id'|'ga'|'it'|'kn'|'ky'|'lv'|'lt'|'lb'|'mk'|'ml'|'mr'|'ne'|'nb'|'fa'|'pl'|'pt'|'ro'|'ru'|'sa'|'sr'|'tn'|'si'|'sk'|'sl'|'es'|'sv'|'tl'|'ta'|'tt'|'te'|'tr'|'uk'|'ur'|'yo'|'lij'|'xx' $Language
 * @property 'token'|'sentence'|'paragraph' $Granularity
 */
class ClarifyTextConfig extends Shape
{
    /**
     * @param array{
     *     Language: 'af'|'sq'|'ar'|'hy'|'eu'|'bn'|'bg'|'ca'|'zh'|'hr'|'cs'|'da'|'nl'|'en'|'et'|'fi'|'fr'|'de'|'el'|'gu'|'he'|'hi'|'hu'|'is'|'id'|'ga'|'it'|'kn'|'ky'|'lv'|'lt'|'lb'|'mk'|'ml'|'mr'|'ne'|'nb'|'fa'|'pl'|'pt'|'ro'|'ru'|'sa'|'sr'|'tn'|'si'|'sk'|'sl'|'es'|'sv'|'tl'|'ta'|'tt'|'te'|'tr'|'uk'|'ur'|'yo'|'lij'|'xx',
     *     Granularity: 'token'|'sentence'|'paragraph'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
