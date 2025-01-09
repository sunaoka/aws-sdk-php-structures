<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteColumnStatisticsForPartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $PartitionValues
 * @property string $ColumnName
 */
class DeleteColumnStatisticsForPartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionValues: list<string>,
     *     ColumnName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
