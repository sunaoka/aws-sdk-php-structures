<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operation
 * @property string|null $code
 * @property string|null $message
 */
class GatewayOperationError extends Shape
{
    /**
     * @param array{
     *     operation?: string|null,
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
