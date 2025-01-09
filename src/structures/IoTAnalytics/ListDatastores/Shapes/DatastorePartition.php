<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Partition $attributePartition
 * @property TimestampPartition $timestampPartition
 */
class DatastorePartition extends Shape
{
    /**
     * @param array{
     *     attributePartition?: Partition,
     *     timestampPartition?: TimestampPartition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
