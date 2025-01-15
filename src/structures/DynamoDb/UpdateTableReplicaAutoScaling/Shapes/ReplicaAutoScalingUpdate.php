<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property list<ReplicaGlobalSecondaryIndexAutoScalingUpdate>|null $ReplicaGlobalSecondaryIndexUpdates
 * @property AutoScalingSettingsUpdate|null $ReplicaProvisionedReadCapacityAutoScalingUpdate
 */
class ReplicaAutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     ReplicaGlobalSecondaryIndexUpdates?: list<ReplicaGlobalSecondaryIndexAutoScalingUpdate>|null,
     *     ReplicaProvisionedReadCapacityAutoScalingUpdate?: AutoScalingSettingsUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
