<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotName' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class BotSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'BotName',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
