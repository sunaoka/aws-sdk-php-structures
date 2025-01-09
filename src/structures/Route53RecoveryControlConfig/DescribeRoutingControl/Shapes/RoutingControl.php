<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeRoutingControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlPanelArn
 * @property string $Name
 * @property string $RoutingControlArn
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION' $Status
 * @property string $Owner
 */
class RoutingControl extends Shape
{
    /**
     * @param array{
     *     ControlPanelArn?: string,
     *     Name?: string,
     *     RoutingControlArn?: string,
     *     Status?: 'PENDING'|'DEPLOYED'|'PENDING_DELETION',
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
