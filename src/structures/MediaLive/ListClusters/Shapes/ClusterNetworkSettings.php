<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultRoute
 * @property list<InterfaceMapping>|null $InterfaceMappings
 */
class ClusterNetworkSettings extends Shape
{
    /**
     * @param array{
     *     DefaultRoute?: string|null,
     *     InterfaceMappings?: list<InterfaceMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
