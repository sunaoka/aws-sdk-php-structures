<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-WL'|'en-ZA'|'en-NZ'|'es-US'|'es-ES'|'es-MX'|'fr-FR'|'fr-CA'|'it-IT'|'de-DE'|'de-CH'|'ja-JP'|'pt-BR'|'pt-PT'|'zh-CN'|'zh-TW'|'zh-HK'|'ko-KR'|null $LanguageCode
 * @property list<SyncLanguageCodeItem>|null $LanguageCodes
 * @property 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|'m4a'|null $MediaFormat
 * @property int<8000, 48000>|null $MediaSampleRateHertz
 * @property int|null $SpeakersCount
 * @property int|null $NumberOfChannels
 */
class TranscribeAudioMetadata extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: 'en-US'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-WL'|'en-ZA'|'en-NZ'|'es-US'|'es-ES'|'es-MX'|'fr-FR'|'fr-CA'|'it-IT'|'de-DE'|'de-CH'|'ja-JP'|'pt-BR'|'pt-PT'|'zh-CN'|'zh-TW'|'zh-HK'|'ko-KR'|null,
     *     LanguageCodes?: list<SyncLanguageCodeItem>|null,
     *     MediaFormat?: 'mp3'|'mp4'|'wav'|'flac'|'ogg'|'amr'|'webm'|'m4a'|null,
     *     MediaSampleRateHertz?: int<8000, 48000>|null,
     *     SpeakersCount?: int|null,
     *     NumberOfChannels?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
