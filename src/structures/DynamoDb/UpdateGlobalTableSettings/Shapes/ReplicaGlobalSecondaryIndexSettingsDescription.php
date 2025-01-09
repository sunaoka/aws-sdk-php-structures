<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE' $IndexStatus
 * @property int<1, max> $ProvisionedReadCapacityUnits
 * @property AutoScalingSettingsDescription $ProvisionedReadCapacityAutoScalingSettings
 * @property int<1, max> $ProvisionedWriteCapacityUnits
 * @property AutoScalingSettingsDescription $ProvisionedWriteCapacityAutoScalingSettings
 */
class ReplicaGlobalSecondaryIndexSettingsDescription extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE',
     *     ProvisionedReadCapacityUnits?: int<1, max>,
     *     ProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription,
     *     ProvisionedWriteCapacityUnits?: int<1, max>,
     *     ProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
