<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpRouteAction $action
 * @property HttpRouteMatch $match
 * @property HttpRetryPolicy|null $retryPolicy
 * @property HttpTimeout|null $timeout
 */
class HttpRoute extends Shape
{
    /**
     * @param array{
     *     action: HttpRouteAction,
     *     match: HttpRouteMatch,
     *     retryPolicy?: HttpRetryPolicy|null,
     *     timeout?: HttpTimeout|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
