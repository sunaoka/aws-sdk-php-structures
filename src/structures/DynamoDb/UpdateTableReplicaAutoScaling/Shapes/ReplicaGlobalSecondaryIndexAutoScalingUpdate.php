<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property AutoScalingSettingsUpdate|null $ProvisionedReadCapacityAutoScalingUpdate
 */
class ReplicaGlobalSecondaryIndexAutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     ProvisionedReadCapacityAutoScalingUpdate?: AutoScalingSettingsUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
