<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8> $mcuCount
 * @property int<1, 10> $workerCount
 */
class ProvisionedCapacityUpdate extends Shape
{
    /**
     * @param array{
     *     mcuCount: int<1, 8>,
     *     workerCount: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
