<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Partition|null $attributePartition
 * @property TimestampPartition|null $timestampPartition
 */
class DatastorePartition extends Shape
{
    /**
     * @param array{
     *     attributePartition?: Partition|null,
     *     timestampPartition?: TimestampPartition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
