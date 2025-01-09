<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $healthyThreshold
 * @property int $intervalMillis
 * @property string $path
 * @property int $port
 * @property 'http'|'http2'|'grpc' $protocol
 * @property int $timeoutMillis
 * @property int $unhealthyThreshold
 */
class VirtualGatewayHealthCheckPolicy extends Shape
{
    /**
     * @param array{
     *     healthyThreshold: int,
     *     intervalMillis: int,
     *     path?: string,
     *     port?: int,
     *     protocol: 'http'|'http2'|'grpc',
     *     timeoutMillis: int,
     *     unhealthyThreshold: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
