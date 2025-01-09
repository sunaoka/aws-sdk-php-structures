<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultRoute
 * @property list<InterfaceMapping> $InterfaceMappings
 */
class ClusterNetworkSettings extends Shape
{
    /**
     * @param array{
     *     DefaultRoute?: string,
     *     InterfaceMappings?: list<InterfaceMapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
