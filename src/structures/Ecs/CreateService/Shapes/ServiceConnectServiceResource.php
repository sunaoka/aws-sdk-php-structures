<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $discoveryName
 * @property string $discoveryArn
 */
class ServiceConnectServiceResource extends Shape
{
    /**
     * @param array{
     *     discoveryName?: string,
     *     discoveryArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
