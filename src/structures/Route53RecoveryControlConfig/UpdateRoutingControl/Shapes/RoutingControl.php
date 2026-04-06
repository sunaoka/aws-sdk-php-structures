<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateRoutingControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ControlPanelArn
 * @property string|null $Name
 * @property string|null $RoutingControlArn
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION'|null $Status
 */
class RoutingControl extends Shape
{
    /**
     * @param array{
     *     ControlPanelArn?: string|null,
     *     Name?: string|null,
     *     RoutingControlArn?: string|null,
     *     Status?: 'PENDING'|'DEPLOYED'|'PENDING_DELETION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
