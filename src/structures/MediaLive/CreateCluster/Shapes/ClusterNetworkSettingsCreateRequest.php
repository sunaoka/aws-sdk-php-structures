<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultRoute
 * @property list<InterfaceMappingCreateRequest>|null $InterfaceMappings
 */
class ClusterNetworkSettingsCreateRequest extends Shape
{
    /**
     * @param array{
     *     DefaultRoute?: string|null,
     *     InterfaceMappings?: list<InterfaceMappingCreateRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
