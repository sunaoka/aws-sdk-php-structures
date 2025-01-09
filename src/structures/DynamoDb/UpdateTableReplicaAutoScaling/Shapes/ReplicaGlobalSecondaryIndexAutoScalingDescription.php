<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE' $IndexStatus
 * @property AutoScalingSettingsDescription $ProvisionedReadCapacityAutoScalingSettings
 * @property AutoScalingSettingsDescription $ProvisionedWriteCapacityAutoScalingSettings
 */
class ReplicaGlobalSecondaryIndexAutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE',
     *     ProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription,
     *     ProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
