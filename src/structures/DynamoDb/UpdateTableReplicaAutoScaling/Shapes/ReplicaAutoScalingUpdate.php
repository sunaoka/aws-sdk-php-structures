<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property list<ReplicaGlobalSecondaryIndexAutoScalingUpdate> $ReplicaGlobalSecondaryIndexUpdates
 * @property AutoScalingSettingsUpdate $ReplicaProvisionedReadCapacityAutoScalingUpdate
 */
class ReplicaAutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     ReplicaGlobalSecondaryIndexUpdates?: list<ReplicaGlobalSecondaryIndexAutoScalingUpdate>,
     *     ReplicaProvisionedReadCapacityAutoScalingUpdate?: AutoScalingSettingsUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
