<?php

namespace Sunaoka\Aws\Structures\Athena\GetTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $LastAccessTime
 * @property string $TableType
 * @property list<Column> $Columns
 * @property list<Column> $PartitionKeys
 * @property array<string, string> $Parameters
 */
class TableMetadata extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     LastAccessTime?: \Aws\Api\DateTimeResult,
     *     TableType?: string,
     *     Columns?: list<Column>,
     *     PartitionKeys?: list<Column>,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
