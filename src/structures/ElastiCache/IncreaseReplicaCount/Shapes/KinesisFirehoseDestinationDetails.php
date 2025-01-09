<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseReplicaCount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryStream
 */
class KinesisFirehoseDestinationDetails extends Shape
{
    /**
     * @param array{DeliveryStream?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
