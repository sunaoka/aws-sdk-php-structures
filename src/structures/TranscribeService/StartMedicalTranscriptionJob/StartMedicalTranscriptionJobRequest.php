<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalTranscriptionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalTranscriptionJobName
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE' $LanguageCode
 * @property int<16000, 48000>|null $MediaSampleRateHertz
 * @property 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|null $MediaFormat
 * @property Shapes\Media $Media
 * @property string $OutputBucketName
 * @property string|null $OutputKey
 * @property string|null $OutputEncryptionKMSKeyId
 * @property array<string, string>|null $KMSEncryptionContext
 * @property Shapes\MedicalTranscriptionSetting|null $Settings
 * @property 'PHI'|null $ContentIdentificationType
 * @property 'PRIMARYCARE' $Specialty
 * @property 'CONVERSATION'|'DICTATION' $Type
 * @property list<Shapes\Tag>|null $Tags
 */
class StartMedicalTranscriptionJobRequest extends Request
{
    /**
     * @param array{
     *     MedicalTranscriptionJobName: string,
     *     LanguageCode: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE',
     *     MediaSampleRateHertz?: int<16000, 48000>|null,
     *     MediaFormat?: 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|null,
     *     Media: Shapes\Media,
     *     OutputBucketName: string,
     *     OutputKey?: string|null,
     *     OutputEncryptionKMSKeyId?: string|null,
     *     KMSEncryptionContext?: array<string, string>|null,
     *     Settings?: Shapes\MedicalTranscriptionSetting|null,
     *     ContentIdentificationType?: 'PHI'|null,
     *     Specialty: 'PRIMARYCARE',
     *     Type: 'CONVERSATION'|'DICTATION',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
