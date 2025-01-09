<?php

namespace Sunaoka\Aws\Structures\Ecs\PutClusterCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property string $clusterName
 * @property ClusterConfiguration $configuration
 * @property string $status
 * @property int $registeredContainerInstancesCount
 * @property int $runningTasksCount
 * @property int $pendingTasksCount
 * @property int $activeServicesCount
 * @property list<KeyValuePair> $statistics
 * @property list<Tag> $tags
 * @property list<ClusterSetting> $settings
 * @property list<string> $capacityProviders
 * @property list<CapacityProviderStrategyItem> $defaultCapacityProviderStrategy
 * @property list<Attachment> $attachments
 * @property string $attachmentsStatus
 * @property ClusterServiceConnectDefaults $serviceConnectDefaults
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     clusterArn?: string,
     *     clusterName?: string,
     *     configuration?: ClusterConfiguration,
     *     status?: string,
     *     registeredContainerInstancesCount?: int,
     *     runningTasksCount?: int,
     *     pendingTasksCount?: int,
     *     activeServicesCount?: int,
     *     statistics?: list<KeyValuePair>,
     *     tags?: list<Tag>,
     *     settings?: list<ClusterSetting>,
     *     capacityProviders?: list<string>,
     *     defaultCapacityProviderStrategy?: list<CapacityProviderStrategyItem>,
     *     attachments?: list<Attachment>,
     *     attachmentsStatus?: string,
     *     serviceConnectDefaults?: ClusterServiceConnectDefaults
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
