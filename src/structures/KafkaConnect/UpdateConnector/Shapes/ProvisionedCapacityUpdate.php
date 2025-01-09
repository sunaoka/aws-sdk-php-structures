<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $mcuCount
 * @property int $workerCount
 */
class ProvisionedCapacityUpdate extends Shape
{
    /**
     * @param array{
     *     mcuCount: int,
     *     workerCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
