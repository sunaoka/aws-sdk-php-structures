<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListControlPanels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 * @property string|null $ControlPanelArn
 * @property bool|null $DefaultControlPanel
 * @property string|null $Name
 * @property int|null $RoutingControlCount
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION'|null $Status
 * @property string|null $Owner
 */
class ControlPanel extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     ControlPanelArn?: string|null,
     *     DefaultControlPanel?: bool|null,
     *     Name?: string|null,
     *     RoutingControlCount?: int|null,
     *     Status?: 'PENDING'|'DEPLOYED'|'PENDING_DELETION'|null,
     *     Owner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
