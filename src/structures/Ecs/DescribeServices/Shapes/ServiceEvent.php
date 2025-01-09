<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $message
 */
class ServiceEvent extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
