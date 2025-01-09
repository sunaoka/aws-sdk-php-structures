<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchDeleteCustomVocabularyItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemId
 */
class CustomVocabularyEntryId extends Shape
{
    /**
     * @param array{itemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
