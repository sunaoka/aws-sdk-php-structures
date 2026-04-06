<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ON_PREMISES'|null $ClusterType
 * @property string|null $InstanceRoleArn
 * @property string|null $Name
 * @property Shapes\ClusterNetworkSettingsCreateRequest|null $NetworkSettings
 * @property string|null $RequestId
 * @property array<string, string>|null $Tags
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterType?: 'ON_PREMISES'|null,
     *     InstanceRoleArn?: string|null,
     *     Name?: string|null,
     *     NetworkSettings?: Shapes\ClusterNetworkSettingsCreateRequest|null,
     *     RequestId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
