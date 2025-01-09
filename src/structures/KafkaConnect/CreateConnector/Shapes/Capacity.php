<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScaling $autoScaling
 * @property ProvisionedCapacity $provisionedCapacity
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     autoScaling?: AutoScaling,
     *     provisionedCapacity?: ProvisionedCapacity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
