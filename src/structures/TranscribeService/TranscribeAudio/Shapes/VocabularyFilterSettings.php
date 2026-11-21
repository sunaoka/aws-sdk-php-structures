<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 * @property list<VocabularyFilterEntry> $Filters
 */
class VocabularyFilterSettings extends Shape
{
    /**
     * @param array{
     *     VocabularyFilterMethod: 'remove'|'mask'|'tag',
     *     Filters: list<VocabularyFilterEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
