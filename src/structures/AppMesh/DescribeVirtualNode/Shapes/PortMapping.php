<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 * @property 'http'|'tcp'|'http2'|'grpc' $protocol
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     port: int,
     *     protocol: 'http'|'tcp'|'http2'|'grpc'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
