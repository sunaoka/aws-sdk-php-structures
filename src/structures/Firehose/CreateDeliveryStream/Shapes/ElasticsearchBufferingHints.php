<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IntervalInSeconds
 * @property int $SizeInMBs
 */
class ElasticsearchBufferingHints extends Shape
{
    /**
     * @param array{
     *     IntervalInSeconds?: int,
     *     SizeInMBs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
