<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<Shapes\ClusterSetting> $settings
 * @property Shapes\ClusterConfiguration $configuration
 * @property Shapes\ClusterServiceConnectDefaultsRequest $serviceConnectDefaults
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     settings?: list<Shapes\ClusterSetting>,
     *     configuration?: Shapes\ClusterConfiguration,
     *     serviceConnectDefaults?: Shapes\ClusterServiceConnectDefaultsRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
