<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateControlPanel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property string $ControlPanelArn
 * @property bool $DefaultControlPanel
 * @property string $Name
 * @property int $RoutingControlCount
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION' $Status
 * @property string $Owner
 */
class ControlPanel extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     ControlPanelArn?: string,
     *     DefaultControlPanel?: bool,
     *     Name?: string,
     *     RoutingControlCount?: int,
     *     Status?: 'PENDING'|'DEPLOYED'|'PENDING_DELETION',
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
