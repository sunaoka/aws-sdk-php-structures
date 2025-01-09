<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $healthyThreshold
 * @property int $intervalMillis
 * @property string $path
 * @property int $port
 * @property 'http'|'tcp'|'http2'|'grpc' $protocol
 * @property int $timeoutMillis
 * @property int $unhealthyThreshold
 */
class HealthCheckPolicy extends Shape
{
    /**
     * @param array{
     *     healthyThreshold: int,
     *     intervalMillis: int,
     *     path?: string,
     *     port?: int,
     *     protocol: 'http'|'tcp'|'http2'|'grpc',
     *     timeoutMillis: int,
     *     unhealthyThreshold: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
