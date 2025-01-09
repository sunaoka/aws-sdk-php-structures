<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property int<1, max> $ProvisionedReadCapacityUnits
 * @property AutoScalingSettingsUpdate $ProvisionedReadCapacityAutoScalingSettingsUpdate
 */
class ReplicaGlobalSecondaryIndexSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedReadCapacityUnits?: int<1, max>,
     *     ProvisionedReadCapacityAutoScalingSettingsUpdate?: AutoScalingSettingsUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
