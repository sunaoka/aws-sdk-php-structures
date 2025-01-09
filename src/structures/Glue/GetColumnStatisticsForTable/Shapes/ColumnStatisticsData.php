<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BOOLEAN'|'DATE'|'DECIMAL'|'DOUBLE'|'LONG'|'STRING'|'BINARY' $Type
 * @property BooleanColumnStatisticsData $BooleanColumnStatisticsData
 * @property DateColumnStatisticsData $DateColumnStatisticsData
 * @property DecimalColumnStatisticsData $DecimalColumnStatisticsData
 * @property DoubleColumnStatisticsData $DoubleColumnStatisticsData
 * @property LongColumnStatisticsData $LongColumnStatisticsData
 * @property StringColumnStatisticsData $StringColumnStatisticsData
 * @property BinaryColumnStatisticsData $BinaryColumnStatisticsData
 */
class ColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     Type: 'BOOLEAN'|'DATE'|'DECIMAL'|'DOUBLE'|'LONG'|'STRING'|'BINARY',
     *     BooleanColumnStatisticsData?: BooleanColumnStatisticsData,
     *     DateColumnStatisticsData?: DateColumnStatisticsData,
     *     DecimalColumnStatisticsData?: DecimalColumnStatisticsData,
     *     DoubleColumnStatisticsData?: DoubleColumnStatisticsData,
     *     LongColumnStatisticsData?: LongColumnStatisticsData,
     *     StringColumnStatisticsData?: StringColumnStatisticsData,
     *     BinaryColumnStatisticsData?: BinaryColumnStatisticsData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
