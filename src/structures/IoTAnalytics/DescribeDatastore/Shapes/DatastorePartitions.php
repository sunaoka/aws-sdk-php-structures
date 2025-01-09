<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DatastorePartition> $partitions
 */
class DatastorePartitions extends Shape
{
    /**
     * @param array{partitions?: list<DatastorePartition>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
