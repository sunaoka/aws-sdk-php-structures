<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotResourceGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'creationStartTime'|'lastUpdatedTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class GenerationSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'creationStartTime'|'lastUpdatedTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
