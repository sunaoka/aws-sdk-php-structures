<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $ColumnType
 * @property \Aws\Api\DateTimeResult $AnalyzedTime
 * @property ColumnStatisticsData $StatisticsData
 */
class ColumnStatistics extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     ColumnType: string,
     *     AnalyzedTime: \Aws\Api\DateTimeResult,
     *     StatisticsData: ColumnStatisticsData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
