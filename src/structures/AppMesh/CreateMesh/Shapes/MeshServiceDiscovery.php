<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateMesh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY' $ipPreference
 */
class MeshServiceDiscovery extends Shape
{
    /**
     * @param array{ipPreference?: 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
