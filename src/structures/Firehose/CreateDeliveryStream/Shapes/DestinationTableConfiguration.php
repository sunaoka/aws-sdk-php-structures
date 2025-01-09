<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationTableName
 * @property string $DestinationDatabaseName
 * @property list<string> $UniqueKeys
 * @property PartitionSpec $PartitionSpec
 * @property string $S3ErrorOutputPrefix
 */
class DestinationTableConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationTableName: string,
     *     DestinationDatabaseName: string,
     *     UniqueKeys?: list<string>,
     *     PartitionSpec?: PartitionSpec,
     *     S3ErrorOutputPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
