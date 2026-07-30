<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationDatabaseName
 * @property string|null $DestinationTableName
 * @property PartitionSpec|null $PartitionSpec
 */
class DestinationTable extends Shape
{
    /**
     * @param array{
     *     DestinationDatabaseName?: string|null,
     *     DestinationTableName?: string|null,
     *     PartitionSpec?: PartitionSpec|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
