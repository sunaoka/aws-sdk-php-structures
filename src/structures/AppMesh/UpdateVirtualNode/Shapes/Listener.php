<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualNodeConnectionPool|null $connectionPool
 * @property HealthCheckPolicy|null $healthCheck
 * @property OutlierDetection|null $outlierDetection
 * @property PortMapping $portMapping
 * @property ListenerTimeout|null $timeout
 * @property ListenerTls|null $tls
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     connectionPool?: VirtualNodeConnectionPool|null,
     *     healthCheck?: HealthCheckPolicy|null,
     *     outlierDetection?: OutlierDetection|null,
     *     portMapping: PortMapping,
     *     timeout?: ListenerTimeout|null,
     *     tls?: ListenerTls|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
