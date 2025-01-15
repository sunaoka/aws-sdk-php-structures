<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkerLogDeliveryDescription|null $workerLogDelivery
 */
class LogDeliveryDescription extends Shape
{
    /**
     * @param array{workerLogDelivery?: WorkerLogDeliveryDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
