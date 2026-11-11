<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EventTime'|'DeliveryTime' $partitionDateSource
 */
class PartitionedPrefix extends Shape
{
    /**
     * @param array{partitionDateSource: 'EventTime'|'DeliveryTime'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
