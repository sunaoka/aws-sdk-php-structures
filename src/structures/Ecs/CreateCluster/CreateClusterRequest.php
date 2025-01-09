<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\ClusterSetting> $settings
 * @property Shapes\ClusterConfiguration $configuration
 * @property list<string> $capacityProviders
 * @property list<Shapes\CapacityProviderStrategyItem> $defaultCapacityProviderStrategy
 * @property Shapes\ClusterServiceConnectDefaultsRequest $serviceConnectDefaults
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     clusterName?: string,
     *     tags?: list<Shapes\Tag>,
     *     settings?: list<Shapes\ClusterSetting>,
     *     configuration?: Shapes\ClusterConfiguration,
     *     capacityProviders?: list<string>,
     *     defaultCapacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>,
     *     serviceConnectDefaults?: Shapes\ClusterServiceConnectDefaultsRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
