<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Name
 * @property Shapes\ClusterNetworkSettingsUpdateRequest $NetworkSettings
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string,
     *     NetworkSettings?: Shapes\ClusterNetworkSettingsUpdateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
