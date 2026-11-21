<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SyncMedia $Media
 * @property 'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK'|null $Language
 * @property 'IDENTIFY_LANGUAGE'|null $LanguageDetectionMode
 * @property list<'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK'>|null $LanguageOptions
 * @property bool|null $ChannelIdentification
 * @property bool|null $ShowSpeakerLabels
 * @property int<2, 30>|null $MaxSpeakerLabels
 * @property list<Shapes\VocabularySettingsEntry>|null $VocabularySettings
 * @property Shapes\VocabularyFilterSettings|null $VocabularyFilterSettings
 * @property Shapes\ContentRedaction|null $ContentRedaction
 * @property Shapes\SyncOutputConfiguration|null $OutputConfiguration
 */
class TranscribeAudioRequest extends Request
{
    /**
     * @param array{
     *     Media: Shapes\SyncMedia,
     *     Language?: 'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK'|null,
     *     LanguageDetectionMode?: 'IDENTIFY_LANGUAGE'|null,
     *     LanguageOptions?: list<'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK'>|null,
     *     ChannelIdentification?: bool|null,
     *     ShowSpeakerLabels?: bool|null,
     *     MaxSpeakerLabels?: int<2, 30>|null,
     *     VocabularySettings?: list<Shapes\VocabularySettingsEntry>|null,
     *     VocabularyFilterSettings?: Shapes\VocabularyFilterSettings|null,
     *     ContentRedaction?: Shapes\ContentRedaction|null,
     *     OutputConfiguration?: Shapes\SyncOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
