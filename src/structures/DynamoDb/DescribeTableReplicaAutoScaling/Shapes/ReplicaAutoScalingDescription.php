<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property list<ReplicaGlobalSecondaryIndexAutoScalingDescription> $GlobalSecondaryIndexes
 * @property AutoScalingSettingsDescription $ReplicaProvisionedReadCapacityAutoScalingSettings
 * @property AutoScalingSettingsDescription $ReplicaProvisionedWriteCapacityAutoScalingSettings
 * @property 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS' $ReplicaStatus
 */
class ReplicaAutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     RegionName?: string,
     *     GlobalSecondaryIndexes?: list<ReplicaGlobalSecondaryIndexAutoScalingDescription>,
     *     ReplicaProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription,
     *     ReplicaProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription,
     *     ReplicaStatus?: 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
