<?php

namespace Sunaoka\Aws\Structures\Connect\SearchVocabularies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $Arn
 * @property 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH' $LanguageCode
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'DELETE_IN_PROGRESS' $State
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 */
class VocabularySummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     Arn: string,
     *     LanguageCode: 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH',
     *     State: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'DELETE_IN_PROGRESS',
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
