<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingUpdate|null $autoScaling
 * @property ProvisionedCapacityUpdate|null $provisionedCapacity
 */
class CapacityUpdate extends Shape
{
    /**
     * @param array{
     *     autoScaling?: AutoScalingUpdate|null,
     *     provisionedCapacity?: ProvisionedCapacityUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
