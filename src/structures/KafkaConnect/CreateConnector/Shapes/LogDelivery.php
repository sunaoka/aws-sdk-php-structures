<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkerLogDelivery $workerLogDelivery
 */
class LogDelivery extends Shape
{
    /**
     * @param array{workerLogDelivery: WorkerLogDelivery} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
