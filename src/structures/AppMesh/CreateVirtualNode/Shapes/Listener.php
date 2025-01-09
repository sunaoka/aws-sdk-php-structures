<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualNodeConnectionPool $connectionPool
 * @property HealthCheckPolicy $healthCheck
 * @property OutlierDetection $outlierDetection
 * @property PortMapping $portMapping
 * @property ListenerTimeout $timeout
 * @property ListenerTls $tls
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     connectionPool?: VirtualNodeConnectionPool,
     *     healthCheck?: HealthCheckPolicy,
     *     outlierDetection?: OutlierDetection,
     *     portMapping: PortMapping,
     *     timeout?: ListenerTimeout,
     *     tls?: ListenerTls
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
