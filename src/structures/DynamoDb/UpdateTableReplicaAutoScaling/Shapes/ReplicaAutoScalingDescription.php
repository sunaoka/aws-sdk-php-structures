<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property list<ReplicaGlobalSecondaryIndexAutoScalingDescription>|null $GlobalSecondaryIndexes
 * @property AutoScalingSettingsDescription|null $ReplicaProvisionedReadCapacityAutoScalingSettings
 * @property AutoScalingSettingsDescription|null $ReplicaProvisionedWriteCapacityAutoScalingSettings
 * @property 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null $ReplicaStatus
 */
class ReplicaAutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     GlobalSecondaryIndexes?: list<ReplicaGlobalSecondaryIndexAutoScalingDescription>|null,
     *     ReplicaProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null,
     *     ReplicaProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null,
     *     ReplicaStatus?: 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
