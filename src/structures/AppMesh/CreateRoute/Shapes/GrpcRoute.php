<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcRouteAction $action
 * @property GrpcRouteMatch $match
 * @property GrpcRetryPolicy|null $retryPolicy
 * @property GrpcTimeout|null $timeout
 */
class GrpcRoute extends Shape
{
    /**
     * @param array{
     *     action: GrpcRouteAction,
     *     match: GrpcRouteMatch,
     *     retryPolicy?: GrpcRetryPolicy|null,
     *     timeout?: GrpcTimeout|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
