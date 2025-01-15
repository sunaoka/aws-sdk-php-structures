<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchCreateCustomVocabularyItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $phrase
 * @property int<0, 3>|null $weight
 * @property string|null $displayAs
 */
class NewCustomVocabularyItem extends Shape
{
    /**
     * @param array{
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
