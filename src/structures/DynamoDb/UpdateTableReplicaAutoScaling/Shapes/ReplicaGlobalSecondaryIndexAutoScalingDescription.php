<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $IndexStatus
 * @property AutoScalingSettingsDescription|null $ProvisionedReadCapacityAutoScalingSettings
 * @property AutoScalingSettingsDescription|null $ProvisionedWriteCapacityAutoScalingSettings
 */
class ReplicaGlobalSecondaryIndexAutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null,
     *     ProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null,
     *     ProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
