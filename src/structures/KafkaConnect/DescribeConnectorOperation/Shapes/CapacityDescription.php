<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingDescription|null $autoScaling
 * @property ProvisionedCapacityDescription|null $provisionedCapacity
 */
class CapacityDescription extends Shape
{
    /**
     * @param array{
     *     autoScaling?: AutoScalingDescription|null,
     *     provisionedCapacity?: ProvisionedCapacityDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
