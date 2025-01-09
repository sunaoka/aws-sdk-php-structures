<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS' $ReplicaStatus
 * @property BillingModeSummary $ReplicaBillingModeSummary
 * @property int $ReplicaProvisionedReadCapacityUnits
 * @property AutoScalingSettingsDescription $ReplicaProvisionedReadCapacityAutoScalingSettings
 * @property int $ReplicaProvisionedWriteCapacityUnits
 * @property AutoScalingSettingsDescription $ReplicaProvisionedWriteCapacityAutoScalingSettings
 * @property list<ReplicaGlobalSecondaryIndexSettingsDescription> $ReplicaGlobalSecondaryIndexSettings
 * @property TableClassSummary $ReplicaTableClassSummary
 */
class ReplicaSettingsDescription extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     ReplicaStatus?: 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS',
     *     ReplicaBillingModeSummary?: BillingModeSummary,
     *     ReplicaProvisionedReadCapacityUnits?: int,
     *     ReplicaProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription,
     *     ReplicaProvisionedWriteCapacityUnits?: int,
     *     ReplicaProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription,
     *     ReplicaGlobalSecondaryIndexSettings?: list<ReplicaGlobalSecondaryIndexSettingsDescription>,
     *     ReplicaTableClassSummary?: TableClassSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
