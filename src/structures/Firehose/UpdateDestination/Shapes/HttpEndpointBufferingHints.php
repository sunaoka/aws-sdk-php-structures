<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 64>|null $SizeInMBs
 * @property int<0, 900>|null $IntervalInSeconds
 */
class HttpEndpointBufferingHints extends Shape
{
    /**
     * @param array{
     *     SizeInMBs?: int<1, 64>|null,
     *     IntervalInSeconds?: int<0, 900>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
