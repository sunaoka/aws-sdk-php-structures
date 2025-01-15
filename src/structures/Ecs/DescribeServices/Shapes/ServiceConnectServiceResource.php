<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $discoveryName
 * @property string|null $discoveryArn
 */
class ServiceConnectServiceResource extends Shape
{
    /**
     * @param array{
     *     discoveryName?: string|null,
     *     discoveryArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
