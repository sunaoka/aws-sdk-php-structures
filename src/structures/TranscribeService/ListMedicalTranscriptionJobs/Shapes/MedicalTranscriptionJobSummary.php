<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalTranscriptionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MedicalTranscriptionJobName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'am-ET'|'cy-GB'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-MX'|'es-US'|'fa-AF'|'fa-IR'|'fr-CA'|'fr-FR'|'ga-IE'|'gd-GB'|'he-IL'|'hi-IN'|'ht-HT'|'id-ID'|'it-IT'|'ja-JP'|'jv-ID'|'km-KH'|'ko-KR'|'my-MM'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|'ab-GE'|'ast-ES'|'az-AZ'|'ba-RU'|'be-BY'|'bg-BG'|'bn-IN'|'bs-BA'|'ca-ES'|'ckb-IQ'|'ckb-IR'|'cs-CZ'|'cy-WL'|'el-GR'|'et-EE'|'et-ET'|'eu-ES'|'fi-FI'|'gl-ES'|'gu-IN'|'ha-NG'|'hr-HR'|'hu-HU'|'hy-AM'|'is-IS'|'ka-GE'|'kab-DZ'|'kk-KZ'|'kn-IN'|'ky-KG'|'lg-IN'|'lt-LT'|'lv-LV'|'mhr-RU'|'mi-NZ'|'mk-MK'|'ml-IN'|'mn-MN'|'mr-IN'|'mt-MT'|'no-NO'|'ne-NP'|'or-IN'|'pa-IN'|'pl-PL'|'ps-AF'|'ro-RO'|'rw-RW'|'si-LK'|'sk-SK'|'sl-SI'|'so-SO'|'sq-AL'|'sr-RS'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'tl-PH'|'tt-RU'|'ug-CN'|'uk-UA'|'uz-UZ'|'wo-SN'|'zh-HK'|'zu-ZA'|null $LanguageCode
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $TranscriptionJobStatus
 * @property string|null $FailureReason
 * @property 'CUSTOMER_BUCKET'|'SERVICE_BUCKET'|null $OutputLocationType
 * @property 'PRIMARYCARE'|null $Specialty
 * @property 'PHI'|null $ContentIdentificationType
 * @property 'CONVERSATION'|'DICTATION'|null $Type
 */
class MedicalTranscriptionJobSummary extends Shape
{
    /**
     * @param array{
     *     MedicalTranscriptionJobName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     LanguageCode?: 'af-ZA'|'ar-AE'|'ar-SA'|'am-ET'|'cy-GB'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-MX'|'es-US'|'fa-AF'|'fa-IR'|'fr-CA'|'fr-FR'|'ga-IE'|'gd-GB'|'he-IL'|'hi-IN'|'ht-HT'|'id-ID'|'it-IT'|'ja-JP'|'jv-ID'|'km-KH'|'ko-KR'|'my-MM'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|'ab-GE'|'ast-ES'|'az-AZ'|'ba-RU'|'be-BY'|'bg-BG'|'bn-IN'|'bs-BA'|'ca-ES'|'ckb-IQ'|'ckb-IR'|'cs-CZ'|'cy-WL'|'el-GR'|'et-EE'|'et-ET'|'eu-ES'|'fi-FI'|'gl-ES'|'gu-IN'|'ha-NG'|'hr-HR'|'hu-HU'|'hy-AM'|'is-IS'|'ka-GE'|'kab-DZ'|'kk-KZ'|'kn-IN'|'ky-KG'|'lg-IN'|'lt-LT'|'lv-LV'|'mhr-RU'|'mi-NZ'|'mk-MK'|'ml-IN'|'mn-MN'|'mr-IN'|'mt-MT'|'no-NO'|'ne-NP'|'or-IN'|'pa-IN'|'pl-PL'|'ps-AF'|'ro-RO'|'rw-RW'|'si-LK'|'sk-SK'|'sl-SI'|'so-SO'|'sq-AL'|'sr-RS'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'tl-PH'|'tt-RU'|'ug-CN'|'uk-UA'|'uz-UZ'|'wo-SN'|'zh-HK'|'zu-ZA'|null,
     *     TranscriptionJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     FailureReason?: string|null,
     *     OutputLocationType?: 'CUSTOMER_BUCKET'|'SERVICE_BUCKET'|null,
     *     Specialty?: 'PRIMARYCARE'|null,
     *     ContentIdentificationType?: 'PHI'|null,
     *     Type?: 'CONVERSATION'|'DICTATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
