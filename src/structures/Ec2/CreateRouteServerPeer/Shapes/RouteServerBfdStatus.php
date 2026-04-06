<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServerPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'up'|'down'|null $Status
 */
class RouteServerBfdStatus extends Shape
{
    /**
     * @param array{Status?: 'up'|'down'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
