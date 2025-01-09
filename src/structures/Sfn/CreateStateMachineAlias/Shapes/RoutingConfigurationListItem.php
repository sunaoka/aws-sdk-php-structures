<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachineAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateMachineVersionArn
 * @property int<0, 100> $weight
 */
class RoutingConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     stateMachineVersionArn: string,
     *     weight: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
