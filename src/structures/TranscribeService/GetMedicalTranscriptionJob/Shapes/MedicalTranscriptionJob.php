<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MedicalTranscriptionJobName
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $TranscriptionJobStatus
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|'ab-GE'|'ast-ES'|'az-AZ'|'ba-RU'|'be-BY'|'bg-BG'|'bn-IN'|'bs-BA'|'ca-ES'|'ckb-IQ'|'ckb-IR'|'cs-CZ'|'cy-WL'|'el-GR'|'et-ET'|'eu-ES'|'fi-FI'|'gl-ES'|'gu-IN'|'ha-NG'|'hr-HR'|'hu-HU'|'hy-AM'|'is-IS'|'ka-GE'|'kab-DZ'|'kk-KZ'|'kn-IN'|'ky-KG'|'lg-IN'|'lt-LT'|'lv-LV'|'mhr-RU'|'mi-NZ'|'mk-MK'|'ml-IN'|'mn-MN'|'mr-IN'|'mt-MT'|'no-NO'|'or-IN'|'pa-IN'|'pl-PL'|'ps-AF'|'ro-RO'|'rw-RW'|'si-LK'|'sk-SK'|'sl-SI'|'so-SO'|'sr-RS'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'tl-PH'|'tt-RU'|'ug-CN'|'uk-UA'|'uz-UZ'|'wo-SN'|'zu-ZA' $LanguageCode
 * @property int<16000, 48000> $MediaSampleRateHertz
 * @property 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|'m4a' $MediaFormat
 * @property Media $Media
 * @property MedicalTranscript $Transcript
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $FailureReason
 * @property MedicalTranscriptionSetting $Settings
 * @property 'PHI' $ContentIdentificationType
 * @property 'PRIMARYCARE' $Specialty
 * @property 'CONVERSATION'|'DICTATION' $Type
 * @property list<Tag> $Tags
 */
class MedicalTranscriptionJob extends Shape
{
    /**
     * @param array{
     *     MedicalTranscriptionJobName?: string,
     *     TranscriptionJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     LanguageCode?: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|'ab-GE'|'ast-ES'|'az-AZ'|'ba-RU'|'be-BY'|'bg-BG'|'bn-IN'|'bs-BA'|'ca-ES'|'ckb-IQ'|'ckb-IR'|'cs-CZ'|'cy-WL'|'el-GR'|'et-ET'|'eu-ES'|'fi-FI'|'gl-ES'|'gu-IN'|'ha-NG'|'hr-HR'|'hu-HU'|'hy-AM'|'is-IS'|'ka-GE'|'kab-DZ'|'kk-KZ'|'kn-IN'|'ky-KG'|'lg-IN'|'lt-LT'|'lv-LV'|'mhr-RU'|'mi-NZ'|'mk-MK'|'ml-IN'|'mn-MN'|'mr-IN'|'mt-MT'|'no-NO'|'or-IN'|'pa-IN'|'pl-PL'|'ps-AF'|'ro-RO'|'rw-RW'|'si-LK'|'sk-SK'|'sl-SI'|'so-SO'|'sr-RS'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'tl-PH'|'tt-RU'|'ug-CN'|'uk-UA'|'uz-UZ'|'wo-SN'|'zu-ZA',
     *     MediaSampleRateHertz?: int<16000, 48000>,
     *     MediaFormat?: 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|'m4a',
     *     Media?: Media,
     *     Transcript?: MedicalTranscript,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     Settings?: MedicalTranscriptionSetting,
     *     ContentIdentificationType?: 'PHI',
     *     Specialty?: 'PRIMARYCARE',
     *     Type?: 'CONVERSATION'|'DICTATION',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
