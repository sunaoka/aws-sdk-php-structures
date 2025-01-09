<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackendDefaults $backendDefaults
 * @property list<Backend> $backends
 * @property list<Listener> $listeners
 * @property Logging $logging
 * @property ServiceDiscovery $serviceDiscovery
 */
class VirtualNodeSpec extends Shape
{
    /**
     * @param array{
     *     backendDefaults?: BackendDefaults,
     *     backends?: list<Backend>,
     *     listeners?: list<Listener>,
     *     logging?: Logging,
     *     serviceDiscovery?: ServiceDiscovery
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
