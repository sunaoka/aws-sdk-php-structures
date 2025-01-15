<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $message
 */
class ServiceEvent extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
