<?php

namespace Sunaoka\Aws\Structures\Polly\GetLexicon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Alphabet
 * @property 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH'|'en-SG'|null $LanguageCode
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $LexiconArn
 * @property int|null $LexemesCount
 * @property int|null $Size
 */
class LexiconAttributes extends Shape
{
    /**
     * @param array{
     *     Alphabet?: string|null,
     *     LanguageCode?: 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH'|'en-SG'|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     LexiconArn?: string|null,
     *     LexemesCount?: int|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
