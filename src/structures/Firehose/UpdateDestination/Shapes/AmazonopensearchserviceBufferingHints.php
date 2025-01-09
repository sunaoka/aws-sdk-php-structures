<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 900> $IntervalInSeconds
 * @property int<1, 100> $SizeInMBs
 */
class AmazonopensearchserviceBufferingHints extends Shape
{
    /**
     * @param array{
     *     IntervalInSeconds?: int<0, 900>,
     *     SizeInMBs?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
