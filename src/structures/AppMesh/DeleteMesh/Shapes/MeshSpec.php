<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteMesh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EgressFilter $egressFilter
 * @property MeshServiceDiscovery $serviceDiscovery
 */
class MeshSpec extends Shape
{
    /**
     * @param array{
     *     egressFilter?: EgressFilter,
     *     serviceDiscovery?: MeshServiceDiscovery
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
