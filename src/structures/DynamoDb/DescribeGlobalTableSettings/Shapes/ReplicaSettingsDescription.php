<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null $ReplicaStatus
 * @property BillingModeSummary|null $ReplicaBillingModeSummary
 * @property int<0, max>|null $ReplicaProvisionedReadCapacityUnits
 * @property AutoScalingSettingsDescription|null $ReplicaProvisionedReadCapacityAutoScalingSettings
 * @property int<0, max>|null $ReplicaProvisionedWriteCapacityUnits
 * @property AutoScalingSettingsDescription|null $ReplicaProvisionedWriteCapacityAutoScalingSettings
 * @property list<ReplicaGlobalSecondaryIndexSettingsDescription>|null $ReplicaGlobalSecondaryIndexSettings
 * @property TableClassSummary|null $ReplicaTableClassSummary
 */
class ReplicaSettingsDescription extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     ReplicaStatus?: 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null,
     *     ReplicaBillingModeSummary?: BillingModeSummary|null,
     *     ReplicaProvisionedReadCapacityUnits?: int<0, max>|null,
     *     ReplicaProvisionedReadCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null,
     *     ReplicaProvisionedWriteCapacityUnits?: int<0, max>|null,
     *     ReplicaProvisionedWriteCapacityAutoScalingSettings?: AutoScalingSettingsDescription|null,
     *     ReplicaGlobalSecondaryIndexSettings?: list<ReplicaGlobalSecondaryIndexSettingsDescription>|null,
     *     ReplicaTableClassSummary?: TableClassSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
