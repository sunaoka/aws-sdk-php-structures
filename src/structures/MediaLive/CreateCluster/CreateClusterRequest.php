<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ON_PREMISES' $ClusterType
 * @property string $InstanceRoleArn
 * @property string $Name
 * @property Shapes\ClusterNetworkSettingsCreateRequest $NetworkSettings
 * @property string $RequestId
 * @property array<string, string> $Tags
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterType?: 'ON_PREMISES',
     *     InstanceRoleArn?: string,
     *     Name?: string,
     *     NetworkSettings?: Shapes\ClusterNetworkSettingsCreateRequest,
     *     RequestId?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
