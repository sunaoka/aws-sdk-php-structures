<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TranscriptionJobName
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $TranscriptionJobStatus
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null $LanguageCode
 * @property int<8000, 48000>|null $MediaSampleRateHertz
 * @property 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|null $MediaFormat
 * @property Media|null $Media
 * @property Transcript|null $Transcript
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $FailureReason
 * @property Settings|null $Settings
 * @property ModelSettings|null $ModelSettings
 * @property JobExecutionSettings|null $JobExecutionSettings
 * @property ContentRedaction|null $ContentRedaction
 * @property bool|null $IdentifyLanguage
 * @property bool|null $IdentifyMultipleLanguages
 * @property list<'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'>|null $LanguageOptions
 * @property float|null $IdentifiedLanguageScore
 * @property list<LanguageCodeItem>|null $LanguageCodes
 * @property list<Tag>|null $Tags
 * @property SubtitlesOutput|null $Subtitles
 * @property array<'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE', LanguageIdSettings>|null $LanguageIdSettings
 * @property list<ToxicityDetectionSettings>|null $ToxicityDetection
 */
class TranscriptionJob extends Shape
{
    /**
     * @param array{
     *     TranscriptionJobName?: string|null,
     *     TranscriptionJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     LanguageCode?: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null,
     *     MediaSampleRateHertz?: int<8000, 48000>|null,
     *     MediaFormat?: 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|null,
     *     Media?: Media|null,
     *     Transcript?: Transcript|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     Settings?: Settings|null,
     *     ModelSettings?: ModelSettings|null,
     *     JobExecutionSettings?: JobExecutionSettings|null,
     *     ContentRedaction?: ContentRedaction|null,
     *     IdentifyLanguage?: bool|null,
     *     IdentifyMultipleLanguages?: bool|null,
     *     LanguageOptions?: list<'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'>|null,
     *     IdentifiedLanguageScore?: float|null,
     *     LanguageCodes?: list<LanguageCodeItem>|null,
     *     Tags?: list<Tag>|null,
     *     Subtitles?: SubtitlesOutput|null,
     *     LanguageIdSettings?: array<'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE', LanguageIdSettings>|null,
     *     ToxicityDetection?: list<ToxicityDetectionSettings>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
