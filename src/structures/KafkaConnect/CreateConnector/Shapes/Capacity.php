<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScaling|null $autoScaling
 * @property ProvisionedCapacity|null $provisionedCapacity
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     autoScaling?: AutoScaling|null,
     *     provisionedCapacity?: ProvisionedCapacity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
