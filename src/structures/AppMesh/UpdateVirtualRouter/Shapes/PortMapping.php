<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $port
 * @property 'http'|'tcp'|'http2'|'grpc' $protocol
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     port: int<1, 65535>,
     *     protocol: 'http'|'tcp'|'http2'|'grpc'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
