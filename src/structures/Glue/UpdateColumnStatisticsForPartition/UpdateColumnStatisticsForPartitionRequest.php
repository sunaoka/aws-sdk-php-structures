<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $PartitionValues
 * @property list<Shapes\ColumnStatistics> $ColumnStatisticsList
 */
class UpdateColumnStatisticsForPartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionValues: list<string>,
     *     ColumnStatisticsList: list<Shapes\ColumnStatistics>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
