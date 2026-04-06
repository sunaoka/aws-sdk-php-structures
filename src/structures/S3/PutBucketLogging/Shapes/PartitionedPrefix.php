<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EventTime'|'DeliveryTime'|null $PartitionDateSource
 */
class PartitionedPrefix extends Shape
{
    /**
     * @param array{PartitionDateSource?: 'EventTime'|'DeliveryTime'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
