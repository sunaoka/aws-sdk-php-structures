<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingDescription $autoScaling
 * @property ProvisionedCapacityDescription $provisionedCapacity
 */
class CapacityDescription extends Shape
{
    /**
     * @param array{
     *     autoScaling?: AutoScalingDescription,
     *     provisionedCapacity?: ProvisionedCapacityDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
