<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 60> $IntervalInSeconds
 * @property int<1, 5> $SizeInMBs
 */
class SplunkBufferingHints extends Shape
{
    /**
     * @param array{
     *     IntervalInSeconds?: int<0, 60>,
     *     SizeInMBs?: int<1, 5>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
