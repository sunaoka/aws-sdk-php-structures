<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clusterName
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\ClusterSetting>|null $settings
 * @property Shapes\ClusterConfiguration|null $configuration
 * @property list<string>|null $capacityProviders
 * @property list<Shapes\CapacityProviderStrategyItem>|null $defaultCapacityProviderStrategy
 * @property Shapes\ClusterServiceConnectDefaultsRequest|null $serviceConnectDefaults
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     clusterName?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     settings?: list<Shapes\ClusterSetting>|null,
     *     configuration?: Shapes\ClusterConfiguration|null,
     *     capacityProviders?: list<string>|null,
     *     defaultCapacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>|null,
     *     serviceConnectDefaults?: Shapes\ClusterServiceConnectDefaultsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
