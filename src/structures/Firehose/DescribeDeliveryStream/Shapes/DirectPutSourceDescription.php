<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $ThroughputHintInMBs
 */
class DirectPutSourceDescription extends Shape
{
    /**
     * @param array{ThroughputHintInMBs?: int<1, 100>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
