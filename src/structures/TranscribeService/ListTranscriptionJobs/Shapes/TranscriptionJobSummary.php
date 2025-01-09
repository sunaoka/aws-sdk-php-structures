<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TranscriptionJobName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|'ab-GE'|'ast-ES'|'az-AZ'|'ba-RU'|'be-BY'|'bg-BG'|'bn-IN'|'bs-BA'|'ca-ES'|'ckb-IQ'|'ckb-IR'|'cs-CZ'|'cy-WL'|'el-GR'|'et-ET'|'eu-ES'|'fi-FI'|'gl-ES'|'gu-IN'|'ha-NG'|'hr-HR'|'hu-HU'|'hy-AM'|'is-IS'|'ka-GE'|'kab-DZ'|'kk-KZ'|'kn-IN'|'ky-KG'|'lg-IN'|'lt-LT'|'lv-LV'|'mhr-RU'|'mi-NZ'|'mk-MK'|'ml-IN'|'mn-MN'|'mr-IN'|'mt-MT'|'no-NO'|'or-IN'|'pa-IN'|'pl-PL'|'ps-AF'|'ro-RO'|'rw-RW'|'si-LK'|'sk-SK'|'sl-SI'|'so-SO'|'sr-RS'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'tl-PH'|'tt-RU'|'ug-CN'|'uk-UA'|'uz-UZ'|'wo-SN'|'zu-ZA' $LanguageCode
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $TranscriptionJobStatus
 * @property string $FailureReason
 * @property 'CUSTOMER_BUCKET'|'SERVICE_BUCKET' $OutputLocationType
 * @property ContentRedaction $ContentRedaction
 * @property ModelSettings $ModelSettings
 * @property bool $IdentifyLanguage
 * @property bool $IdentifyMultipleLanguages
 * @property float $IdentifiedLanguageScore
 * @property list<LanguageCodeItem> $LanguageCodes
 * @property list<ToxicityDetectionSettings> $ToxicityDetection
 */
class TranscriptionJobSummary extends Shape
{
    /**
     * @param array{
     *     TranscriptionJobName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     LanguageCode?: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|'ab-GE'|'ast-ES'|'az-AZ'|'ba-RU'|'be-BY'|'bg-BG'|'bn-IN'|'bs-BA'|'ca-ES'|'ckb-IQ'|'ckb-IR'|'cs-CZ'|'cy-WL'|'el-GR'|'et-ET'|'eu-ES'|'fi-FI'|'gl-ES'|'gu-IN'|'ha-NG'|'hr-HR'|'hu-HU'|'hy-AM'|'is-IS'|'ka-GE'|'kab-DZ'|'kk-KZ'|'kn-IN'|'ky-KG'|'lg-IN'|'lt-LT'|'lv-LV'|'mhr-RU'|'mi-NZ'|'mk-MK'|'ml-IN'|'mn-MN'|'mr-IN'|'mt-MT'|'no-NO'|'or-IN'|'pa-IN'|'pl-PL'|'ps-AF'|'ro-RO'|'rw-RW'|'si-LK'|'sk-SK'|'sl-SI'|'so-SO'|'sr-RS'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'tl-PH'|'tt-RU'|'ug-CN'|'uk-UA'|'uz-UZ'|'wo-SN'|'zu-ZA',
     *     TranscriptionJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     FailureReason?: string,
     *     OutputLocationType?: 'CUSTOMER_BUCKET'|'SERVICE_BUCKET',
     *     ContentRedaction?: ContentRedaction,
     *     ModelSettings?: ModelSettings,
     *     IdentifyLanguage?: bool,
     *     IdentifyMultipleLanguages?: bool,
     *     IdentifiedLanguageScore?: float,
     *     LanguageCodes?: list<LanguageCodeItem>,
     *     ToxicityDetection?: list<ToxicityDetectionSettings>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
