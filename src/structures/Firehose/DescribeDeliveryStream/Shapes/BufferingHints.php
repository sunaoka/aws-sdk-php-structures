<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 128> $SizeInMBs
 * @property int<0, 900> $IntervalInSeconds
 */
class BufferingHints extends Shape
{
    /**
     * @param array{
     *     SizeInMBs?: int<1, 128>,
     *     IntervalInSeconds?: int<0, 900>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
