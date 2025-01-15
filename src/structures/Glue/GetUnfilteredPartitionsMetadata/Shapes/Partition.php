<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastAccessTime
 * @property StorageDescriptor|null $StorageDescriptor
 * @property array<string, string>|null $Parameters
 * @property \Aws\Api\DateTimeResult|null $LastAnalyzedTime
 * @property string|null $CatalogId
 */
class Partition extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastAccessTime?: \Aws\Api\DateTimeResult|null,
     *     StorageDescriptor?: StorageDescriptor|null,
     *     Parameters?: array<string, string>|null,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult|null,
     *     CatalogId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
