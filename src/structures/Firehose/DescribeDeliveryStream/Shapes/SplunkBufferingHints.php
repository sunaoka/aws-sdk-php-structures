<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 60>|null $IntervalInSeconds
 * @property int<1, 5>|null $SizeInMBs
 */
class SplunkBufferingHints extends Shape
{
    /**
     * @param array{
     *     IntervalInSeconds?: int<0, 60>|null,
     *     SizeInMBs?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
