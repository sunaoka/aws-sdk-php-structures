<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $port
 * @property 'http'|'http2'|'grpc' $protocol
 */
class VirtualGatewayPortMapping extends Shape
{
    /**
     * @param array{
     *     port: int<1, 65535>,
     *     protocol: 'http'|'http2'|'grpc'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
