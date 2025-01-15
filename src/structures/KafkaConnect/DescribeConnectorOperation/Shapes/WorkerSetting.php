<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityDescription|null $capacity
 */
class WorkerSetting extends Shape
{
    /**
     * @param array{capacity?: CapacityDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
