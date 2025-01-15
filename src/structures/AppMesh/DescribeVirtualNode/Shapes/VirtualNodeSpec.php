<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackendDefaults|null $backendDefaults
 * @property list<Backend>|null $backends
 * @property list<Listener>|null $listeners
 * @property Logging|null $logging
 * @property ServiceDiscovery|null $serviceDiscovery
 */
class VirtualNodeSpec extends Shape
{
    /**
     * @param array{
     *     backendDefaults?: BackendDefaults|null,
     *     backends?: list<Backend>|null,
     *     listeners?: list<Listener>|null,
     *     logging?: Logging|null,
     *     serviceDiscovery?: ServiceDiscovery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
