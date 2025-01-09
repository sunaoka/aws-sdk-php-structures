<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property int $ReplicaProvisionedReadCapacityUnits
 * @property AutoScalingSettingsUpdate $ReplicaProvisionedReadCapacityAutoScalingSettingsUpdate
 * @property list<ReplicaGlobalSecondaryIndexSettingsUpdate> $ReplicaGlobalSecondaryIndexSettingsUpdate
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS' $ReplicaTableClass
 */
class ReplicaSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     ReplicaProvisionedReadCapacityUnits?: int,
     *     ReplicaProvisionedReadCapacityAutoScalingSettingsUpdate?: AutoScalingSettingsUpdate,
     *     ReplicaGlobalSecondaryIndexSettingsUpdate?: list<ReplicaGlobalSecondaryIndexSettingsUpdate>,
     *     ReplicaTableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
