<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BotVersion' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class BotVersionReplicaSortBy extends Shape
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
