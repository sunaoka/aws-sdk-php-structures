<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationTableName
 * @property string $DestinationDatabaseName
 * @property list<string>|null $UniqueKeys
 * @property PartitionSpec|null $PartitionSpec
 * @property string|null $S3ErrorOutputPrefix
 */
class DestinationTableConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationTableName: string,
     *     DestinationDatabaseName: string,
     *     UniqueKeys?: list<string>|null,
     *     PartitionSpec?: PartitionSpec|null,
     *     S3ErrorOutputPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
