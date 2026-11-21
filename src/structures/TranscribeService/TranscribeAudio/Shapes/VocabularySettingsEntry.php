<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK' $Language
 * @property string|null $VocabularyName
 * @property list<VocabularyPhrase>|null $Phrases
 */
class VocabularySettingsEntry extends Shape
{
    /**
     * @param array{
     *     Language: 'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK',
     *     VocabularyName?: string|null,
     *     Phrases?: list<VocabularyPhrase>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
