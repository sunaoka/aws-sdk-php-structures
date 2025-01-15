<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $mcuCount
 * @property int|null $workerCount
 */
class ProvisionedCapacityDescription extends Shape
{
    /**
     * @param array{
     *     mcuCount?: int|null,
     *     workerCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
