<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<Shapes\ColumnStatistics> $ColumnStatisticsList
 */
class UpdateColumnStatisticsForTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     ColumnStatisticsList: list<Shapes\ColumnStatistics>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
