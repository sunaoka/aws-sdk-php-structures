<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultRoute
 * @property list<InterfaceMappingUpdateRequest> $InterfaceMappings
 */
class ClusterNetworkSettingsUpdateRequest extends Shape
{
    /**
     * @param array{
     *     DefaultRoute?: string,
     *     InterfaceMappings?: list<InterfaceMappingUpdateRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
