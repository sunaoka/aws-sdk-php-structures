<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'up'|'down'|null $Status
 */
class RouteServerBgpStatus extends Shape
{
    /**
     * @param array{Status?: 'up'|'down'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
