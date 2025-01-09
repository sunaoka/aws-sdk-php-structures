<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingUpdate $autoScaling
 * @property ProvisionedCapacityUpdate $provisionedCapacity
 */
class CapacityUpdate extends Shape
{
    /**
     * @param array{
     *     autoScaling?: AutoScalingUpdate,
     *     provisionedCapacity?: ProvisionedCapacityUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
