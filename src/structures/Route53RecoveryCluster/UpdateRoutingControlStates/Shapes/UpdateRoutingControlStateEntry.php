<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\UpdateRoutingControlStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoutingControlArn
 * @property 'On'|'Off' $RoutingControlState
 */
class UpdateRoutingControlStateEntry extends Shape
{
    /**
     * @param array{
     *     RoutingControlArn: string,
     *     RoutingControlState: 'On'|'Off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
