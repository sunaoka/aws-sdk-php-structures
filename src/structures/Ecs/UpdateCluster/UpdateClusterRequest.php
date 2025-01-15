<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<Shapes\ClusterSetting>|null $settings
 * @property Shapes\ClusterConfiguration|null $configuration
 * @property Shapes\ClusterServiceConnectDefaultsRequest|null $serviceConnectDefaults
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     settings?: list<Shapes\ClusterSetting>|null,
     *     configuration?: Shapes\ClusterConfiguration|null,
     *     serviceConnectDefaults?: Shapes\ClusterServiceConnectDefaultsRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
