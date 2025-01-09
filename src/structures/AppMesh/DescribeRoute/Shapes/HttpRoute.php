<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpRouteAction $action
 * @property HttpRouteMatch $match
 * @property HttpRetryPolicy $retryPolicy
 * @property HttpTimeout $timeout
 */
class HttpRoute extends Shape
{
    /**
     * @param array{
     *     action: HttpRouteAction,
     *     match: HttpRouteMatch,
     *     retryPolicy?: HttpRetryPolicy,
     *     timeout?: HttpTimeout
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
