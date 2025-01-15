<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property int<1, max>|null $ProvisionedReadCapacityUnits
 * @property AutoScalingSettingsUpdate|null $ProvisionedReadCapacityAutoScalingSettingsUpdate
 */
class ReplicaGlobalSecondaryIndexSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedReadCapacityUnits?: int<1, max>|null,
     *     ProvisionedReadCapacityAutoScalingSettingsUpdate?: AutoScalingSettingsUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
