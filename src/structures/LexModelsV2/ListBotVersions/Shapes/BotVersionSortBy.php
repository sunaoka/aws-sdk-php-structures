<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotVersion' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class BotVersionSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'BotVersion',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
