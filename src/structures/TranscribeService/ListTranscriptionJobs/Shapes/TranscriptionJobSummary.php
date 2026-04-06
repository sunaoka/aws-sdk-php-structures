<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TranscriptionJobName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null $LanguageCode
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $TranscriptionJobStatus
 * @property string|null $FailureReason
 * @property 'CUSTOMER_BUCKET'|'SERVICE_BUCKET'|null $OutputLocationType
 * @property ContentRedaction|null $ContentRedaction
 * @property ModelSettings|null $ModelSettings
 * @property bool|null $IdentifyLanguage
 * @property bool|null $IdentifyMultipleLanguages
 * @property float|null $IdentifiedLanguageScore
 * @property list<LanguageCodeItem>|null $LanguageCodes
 * @property list<ToxicityDetectionSettings>|null $ToxicityDetection
 */
class TranscriptionJobSummary extends Shape
{
    /**
     * @param array{
     *     TranscriptionJobName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     LanguageCode?: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null,
     *     TranscriptionJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     FailureReason?: string|null,
     *     OutputLocationType?: 'CUSTOMER_BUCKET'|'SERVICE_BUCKET'|null,
     *     ContentRedaction?: ContentRedaction|null,
     *     ModelSettings?: ModelSettings|null,
     *     IdentifyLanguage?: bool|null,
     *     IdentifyMultipleLanguages?: bool|null,
     *     IdentifiedLanguageScore?: float|null,
     *     LanguageCodes?: list<LanguageCodeItem>|null,
     *     ToxicityDetection?: list<ToxicityDetectionSettings>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
