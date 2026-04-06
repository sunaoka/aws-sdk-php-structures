<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CallAnalyticsJobName
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $CallAnalyticsJobStatus
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null $LanguageCode
 * @property int<8000, 48000>|null $MediaSampleRateHertz
 * @property 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|null $MediaFormat
 * @property Media|null $Media
 * @property Transcript|null $Transcript
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $FailureReason
 * @property string|null $DataAccessRoleArn
 * @property float|null $IdentifiedLanguageScore
 * @property CallAnalyticsJobSettings|null $Settings
 * @property list<ChannelDefinition>|null $ChannelDefinitions
 */
class CallAnalyticsJob extends Shape
{
    /**
     * @param array{
     *     CallAnalyticsJobName?: string|null,
     *     CallAnalyticsJobStatus?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     LanguageCode?: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null,
     *     MediaSampleRateHertz?: int<8000, 48000>|null,
     *     MediaFormat?: 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|null,
     *     Media?: Media|null,
     *     Transcript?: Transcript|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     DataAccessRoleArn?: string|null,
     *     IdentifiedLanguageScore?: float|null,
     *     Settings?: CallAnalyticsJobSettings|null,
     *     ChannelDefinitions?: list<ChannelDefinition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
