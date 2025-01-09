<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TcpRouteAction $action
 * @property TcpRouteMatch $match
 * @property TcpTimeout $timeout
 */
class TcpRoute extends Shape
{
    /**
     * @param array{
     *     action: TcpRouteAction,
     *     match?: TcpRouteMatch,
     *     timeout?: TcpTimeout
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
