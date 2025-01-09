<?php

namespace Sunaoka\Aws\Structures\Connect\ListDefaultVocabularies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH' $LanguageCode
 * @property string $VocabularyId
 * @property string $VocabularyName
 */
class DefaultVocabulary extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LanguageCode: 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH',
     *     VocabularyId: string,
     *     VocabularyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
