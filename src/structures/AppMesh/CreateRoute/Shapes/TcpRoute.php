<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TcpRouteAction $action
 * @property TcpRouteMatch|null $match
 * @property TcpTimeout|null $timeout
 */
class TcpRoute extends Shape
{
    /**
     * @param array{
     *     action: TcpRouteAction,
     *     match?: TcpRouteMatch|null,
     *     timeout?: TcpTimeout|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
