<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkerLogDeliveryDescription $workerLogDelivery
 */
class LogDeliveryDescription extends Shape
{
    /**
     * @param array{workerLogDelivery?: WorkerLogDeliveryDescription} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
