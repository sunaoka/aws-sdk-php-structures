<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 128>|null $SizeInMBs
 * @property int<0, 900>|null $IntervalInSeconds
 */
class SnowflakeBufferingHints extends Shape
{
    /**
     * @param array{
     *     SizeInMBs?: int<1, 128>|null,
     *     IntervalInSeconds?: int<0, 900>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
