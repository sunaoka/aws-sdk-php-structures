<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $IndexStatus
 * @property int<1, max>|null $ProvisionedReadCapacityUnits
 * @property AutoScalingSettingsDescription|null $ProvisionedReadCapacityAutoScalingSettings
 * @property int<1, max>|null $ProvisionedWriteCapacityUnits
 * @property AutoScalingSettingsDescription|null $ProvisionedWriteCapacityAutoScalingSettings
 */
class ReplicaGlobalSecondaryIndexSettingsDescription extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null,
     *     ProvisionedReadCapacityUnits?: int<1, max>|null,
     *     ProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null,
     *     ProvisionedWriteCapacityUnits?: int<1, max>|null,
     *     ProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
