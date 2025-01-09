<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SizeInMBs
 * @property int $IntervalInSeconds
 */
class HttpEndpointBufferingHints extends Shape
{
    /**
     * @param array{
     *     SizeInMBs?: int,
     *     IntervalInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
