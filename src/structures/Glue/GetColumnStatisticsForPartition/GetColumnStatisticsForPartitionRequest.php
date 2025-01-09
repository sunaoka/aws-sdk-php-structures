<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $PartitionValues
 * @property list<string> $ColumnNames
 */
class GetColumnStatisticsForPartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionValues: list<string>,
     *     ColumnNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
