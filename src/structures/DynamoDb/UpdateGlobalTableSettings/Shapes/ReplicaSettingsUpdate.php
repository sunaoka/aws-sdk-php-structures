<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property int<1, max>|null $ReplicaProvisionedReadCapacityUnits
 * @property AutoScalingSettingsUpdate|null $ReplicaProvisionedReadCapacityAutoScalingSettingsUpdate
 * @property list<ReplicaGlobalSecondaryIndexSettingsUpdate>|null $ReplicaGlobalSecondaryIndexSettingsUpdate
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null $ReplicaTableClass
 */
class ReplicaSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     ReplicaProvisionedReadCapacityUnits?: int<1, max>|null,
     *     ReplicaProvisionedReadCapacityAutoScalingSettingsUpdate?: AutoScalingSettingsUpdate|null,
     *     ReplicaGlobalSecondaryIndexSettingsUpdate?: list<ReplicaGlobalSecondaryIndexSettingsUpdate>|null,
     *     ReplicaTableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
