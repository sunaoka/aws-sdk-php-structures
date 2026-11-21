<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Id
 * @property string|null $Content
 * @property double|null $StartTime
 * @property double|null $EndTime
 * @property 'en-US'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-WL'|'en-ZA'|'en-NZ'|'es-US'|'es-ES'|'es-MX'|'fr-FR'|'fr-CA'|'it-IT'|'de-DE'|'de-CH'|'ja-JP'|'pt-BR'|'pt-PT'|'zh-CN'|'zh-TW'|'zh-HK'|'ko-KR'|null $LanguageCode
 * @property string|null $ChannelLabel
 * @property string|null $SpeakerLabel
 * @property bool|null $VocabularyFilterMatch
 * @property list<SyncRedaction>|null $Redactions
 */
class SyncItem extends Shape
{
    /**
     * @param array{
     *     Id?: int|null,
     *     Content?: string|null,
     *     StartTime?: double|null,
     *     EndTime?: double|null,
     *     LanguageCode?: 'en-US'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-WL'|'en-ZA'|'en-NZ'|'es-US'|'es-ES'|'es-MX'|'fr-FR'|'fr-CA'|'it-IT'|'de-DE'|'de-CH'|'ja-JP'|'pt-BR'|'pt-PT'|'zh-CN'|'zh-TW'|'zh-HK'|'ko-KR'|null,
     *     ChannelLabel?: string|null,
     *     SpeakerLabel?: string|null,
     *     VocabularyFilterMatch?: bool|null,
     *     Redactions?: list<SyncRedaction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
