<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultRoute
 * @property list<InterfaceMappingUpdateRequest>|null $InterfaceMappings
 */
class ClusterNetworkSettingsUpdateRequest extends Shape
{
    /**
     * @param array{
     *     DefaultRoute?: string|null,
     *     InterfaceMappings?: list<InterfaceMappingUpdateRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
