<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 10> $healthyThreshold
 * @property int<5000, 300000> $intervalMillis
 * @property string $path
 * @property int<1, 65535> $port
 * @property 'http'|'tcp'|'http2'|'grpc' $protocol
 * @property int<2000, 60000> $timeoutMillis
 * @property int<2, 10> $unhealthyThreshold
 */
class HealthCheckPolicy extends Shape
{
    /**
     * @param array{
     *     healthyThreshold: int<2, 10>,
     *     intervalMillis: int<5000, 300000>,
     *     path?: string,
     *     port?: int<1, 65535>,
     *     protocol: 'http'|'tcp'|'http2'|'grpc',
     *     timeoutMillis: int<2000, 60000>,
     *     unhealthyThreshold: int<2, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
