<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteMesh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EgressFilter|null $egressFilter
 * @property MeshServiceDiscovery|null $serviceDiscovery
 */
class MeshSpec extends Shape
{
    /**
     * @param array{
     *     egressFilter?: EgressFilter|null,
     *     serviceDiscovery?: MeshServiceDiscovery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
