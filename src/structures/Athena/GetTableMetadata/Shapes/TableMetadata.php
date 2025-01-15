<?php

namespace Sunaoka\Aws\Structures\Athena\GetTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $LastAccessTime
 * @property string|null $TableType
 * @property list<Column>|null $Columns
 * @property list<Column>|null $PartitionKeys
 * @property array<string, string>|null $Parameters
 */
class TableMetadata extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     LastAccessTime?: \Aws\Api\DateTimeResult|null,
     *     TableType?: string|null,
     *     Columns?: list<Column>|null,
     *     PartitionKeys?: list<Column>|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
