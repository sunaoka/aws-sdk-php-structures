<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 10> $healthyThreshold
 * @property int<5000, 300000> $intervalMillis
 * @property string|null $path
 * @property int<1, 65535>|null $port
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
     *     path?: string|null,
     *     port?: int<1, 65535>|null,
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
