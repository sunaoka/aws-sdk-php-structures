<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property list<GatewayOperationError>|null $errors
 */
class GatewayResourceFailure extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     errors?: list<GatewayOperationError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
