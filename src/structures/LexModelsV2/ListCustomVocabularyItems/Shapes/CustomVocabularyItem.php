<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListCustomVocabularyItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemId
 * @property string $phrase
 * @property int<0, 3>|null $weight
 * @property string|null $displayAs
 */
class CustomVocabularyItem extends Shape
{
    /**
     * @param array{
     *     itemId: string,
     *     phrase: string,
     *     weight?: int<0, 3>|null,
     *     displayAs?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
