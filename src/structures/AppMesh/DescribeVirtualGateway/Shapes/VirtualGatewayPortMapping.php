<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 * @property 'http'|'http2'|'grpc' $protocol
 */
class VirtualGatewayPortMapping extends Shape
{
    /**
     * @param array{
     *     port: int,
     *     protocol: 'http'|'http2'|'grpc'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
