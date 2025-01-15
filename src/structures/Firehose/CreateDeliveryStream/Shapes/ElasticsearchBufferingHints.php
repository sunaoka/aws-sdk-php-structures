<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 900>|null $IntervalInSeconds
 * @property int<1, 100>|null $SizeInMBs
 */
class ElasticsearchBufferingHints extends Shape
{
    /**
     * @param array{
     *     IntervalInSeconds?: int<0, 900>|null,
     *     SizeInMBs?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
