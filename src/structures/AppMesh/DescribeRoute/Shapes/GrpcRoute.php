<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcRouteAction $action
 * @property GrpcRouteMatch $match
 * @property GrpcRetryPolicy $retryPolicy
 * @property GrpcTimeout $timeout
 */
class GrpcRoute extends Shape
{
    /**
     * @param array{
     *     action: GrpcRouteAction,
     *     match: GrpcRouteMatch,
     *     retryPolicy?: GrpcRetryPolicy,
     *     timeout?: GrpcTimeout
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
