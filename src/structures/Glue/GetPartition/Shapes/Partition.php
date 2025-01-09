<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 * @property string $DatabaseName
 * @property string $TableName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastAccessTime
 * @property StorageDescriptor $StorageDescriptor
 * @property array<string, string> $Parameters
 * @property \Aws\Api\DateTimeResult $LastAnalyzedTime
 * @property string $CatalogId
 */
class Partition extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>,
     *     DatabaseName?: string,
     *     TableName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastAccessTime?: \Aws\Api\DateTimeResult,
     *     StorageDescriptor?: StorageDescriptor,
     *     Parameters?: array<string, string>,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult,
     *     CatalogId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
