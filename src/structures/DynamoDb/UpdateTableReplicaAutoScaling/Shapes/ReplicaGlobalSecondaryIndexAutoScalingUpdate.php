<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property AutoScalingSettingsUpdate $ProvisionedReadCapacityAutoScalingUpdate
 */
class ReplicaGlobalSecondaryIndexAutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     ProvisionedReadCapacityAutoScalingUpdate?: AutoScalingSettingsUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
