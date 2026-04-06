<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableRouteServerPropagation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteServerId
 * @property string|null $RouteTableId
 * @property 'pending'|'available'|'deleting'|null $State
 */
class RouteServerPropagation extends Shape
{
    /**
     * @param array{
     *     RouteServerId?: string|null,
     *     RouteTableId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
