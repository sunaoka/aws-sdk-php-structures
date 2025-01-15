<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateClusterSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterArn
 * @property string|null $clusterName
 * @property ClusterConfiguration|null $configuration
 * @property string|null $status
 * @property int|null $registeredContainerInstancesCount
 * @property int|null $runningTasksCount
 * @property int|null $pendingTasksCount
 * @property int|null $activeServicesCount
 * @property list<KeyValuePair>|null $statistics
 * @property list<Tag>|null $tags
 * @property list<ClusterSetting>|null $settings
 * @property list<string>|null $capacityProviders
 * @property list<CapacityProviderStrategyItem>|null $defaultCapacityProviderStrategy
 * @property list<Attachment>|null $attachments
 * @property string|null $attachmentsStatus
 * @property ClusterServiceConnectDefaults|null $serviceConnectDefaults
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     clusterArn?: string|null,
     *     clusterName?: string|null,
     *     configuration?: ClusterConfiguration|null,
     *     status?: string|null,
     *     registeredContainerInstancesCount?: int|null,
     *     runningTasksCount?: int|null,
     *     pendingTasksCount?: int|null,
     *     activeServicesCount?: int|null,
     *     statistics?: list<KeyValuePair>|null,
     *     tags?: list<Tag>|null,
     *     settings?: list<ClusterSetting>|null,
     *     capacityProviders?: list<string>|null,
     *     defaultCapacityProviderStrategy?: list<CapacityProviderStrategyItem>|null,
     *     attachments?: list<Attachment>|null,
     *     attachmentsStatus?: string|null,
     *     serviceConnectDefaults?: ClusterServiceConnectDefaults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
