<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultRoute
 * @property list<InterfaceMappingCreateRequest> $InterfaceMappings
 */
class ClusterNetworkSettingsCreateRequest extends Shape
{
    /**
     * @param array{
     *     DefaultRoute?: string,
     *     InterfaceMappings?: list<InterfaceMappingCreateRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
