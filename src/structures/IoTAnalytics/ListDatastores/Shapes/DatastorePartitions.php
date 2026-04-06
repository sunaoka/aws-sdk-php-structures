<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DatastorePartition>|null $partitions
 */
class DatastorePartitions extends Shape
{
    /**
     * @param array{partitions?: list<DatastorePartition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
