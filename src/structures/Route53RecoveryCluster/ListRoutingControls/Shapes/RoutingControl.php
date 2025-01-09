<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\ListRoutingControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlPanelArn
 * @property string $ControlPanelName
 * @property string $RoutingControlArn
 * @property string $RoutingControlName
 * @property 'On'|'Off' $RoutingControlState
 * @property string $Owner
 */
class RoutingControl extends Shape
{
    /**
     * @param array{
     *     ControlPanelArn?: string,
     *     ControlPanelName?: string,
     *     RoutingControlArn?: string,
     *     RoutingControlName?: string,
     *     RoutingControlState?: 'On'|'Off',
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
