<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachineAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateMachineVersionArn
 * @property int $weight
 */
class RoutingConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     stateMachineVersionArn: string,
     *     weight: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
