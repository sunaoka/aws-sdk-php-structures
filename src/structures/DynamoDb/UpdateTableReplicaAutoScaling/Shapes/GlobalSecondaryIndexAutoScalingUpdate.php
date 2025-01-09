<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property AutoScalingSettingsUpdate $ProvisionedWriteCapacityAutoScalingUpdate
 */
class GlobalSecondaryIndexAutoScalingUpdate extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     ProvisionedWriteCapacityAutoScalingUpdate?: AutoScalingSettingsUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
