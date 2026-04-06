<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $ThroughputHintInMBs
 */
class DirectPutSourceConfiguration extends Shape
{
    /**
     * @param array{ThroughputHintInMBs: int<1, 100>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
