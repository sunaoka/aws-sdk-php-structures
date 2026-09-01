<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableBucketARN
 * @property string $Namespace
 * @property string $TableName
 * @property 'NONE'|'ZSTD'|'SNAPPY' $CompressionType
 * @property PartitionSpec|null $PartitionSpec
 */
class S3TablesConfiguration extends Shape
{
    /**
     * @param array{
     *     TableBucketARN: string,
     *     Namespace: string,
     *     TableName: string,
     *     CompressionType: 'NONE'|'ZSTD'|'SNAPPY',
     *     PartitionSpec?: PartitionSpec|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
