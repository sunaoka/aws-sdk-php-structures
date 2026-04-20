<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReplicatorLogDelivery|null $ReplicatorLogDelivery
 */
class LogDelivery extends Shape
{
    /**
     * @param array{ReplicatorLogDelivery?: ReplicatorLogDelivery|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
