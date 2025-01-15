<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\ListRoutingControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ControlPanelArn
 * @property string|null $ControlPanelName
 * @property string|null $RoutingControlArn
 * @property string|null $RoutingControlName
 * @property 'On'|'Off'|null $RoutingControlState
 * @property string|null $Owner
 */
class RoutingControl extends Shape
{
    /**
     * @param array{
     *     ControlPanelArn?: string|null,
     *     ControlPanelName?: string|null,
     *     RoutingControlArn?: string|null,
     *     RoutingControlName?: string|null,
     *     RoutingControlState?: 'On'|'Off'|null,
     *     Owner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
