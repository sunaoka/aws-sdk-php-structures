<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchCreateCustomVocabularyItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemId
 * @property string $phrase
 * @property int $weight
 * @property string $displayAs
 */
class CustomVocabularyItem extends Shape
{
    /**
     * @param array{
     *     itemId: string,
     *     phrase: string,
     *     weight?: int,
     *     displayAs?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
