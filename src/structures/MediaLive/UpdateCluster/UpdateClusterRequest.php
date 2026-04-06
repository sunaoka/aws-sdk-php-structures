<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $Name
 * @property Shapes\ClusterNetworkSettingsUpdateRequest|null $NetworkSettings
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Name?: string|null,
     *     NetworkSettings?: Shapes\ClusterNetworkSettingsUpdateRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
