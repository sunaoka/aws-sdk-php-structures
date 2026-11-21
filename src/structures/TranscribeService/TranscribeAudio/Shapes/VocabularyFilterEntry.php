<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK' $Language
 * @property string|null $VocabularyFilterName
 * @property list<string>|null $Words
 */
class VocabularyFilterEntry extends Shape
{
    /**
     * @param array{
     *     Language: 'en'|'es'|'fr'|'it'|'de'|'ja'|'pt'|'ko'|'zh-CN'|'zh-TW'|'zh-HK',
     *     VocabularyFilterName?: string|null,
     *     Words?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
