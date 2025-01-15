<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BOOLEAN'|'DATE'|'DECIMAL'|'DOUBLE'|'LONG'|'STRING'|'BINARY' $Type
 * @property BooleanColumnStatisticsData|null $BooleanColumnStatisticsData
 * @property DateColumnStatisticsData|null $DateColumnStatisticsData
 * @property DecimalColumnStatisticsData|null $DecimalColumnStatisticsData
 * @property DoubleColumnStatisticsData|null $DoubleColumnStatisticsData
 * @property LongColumnStatisticsData|null $LongColumnStatisticsData
 * @property StringColumnStatisticsData|null $StringColumnStatisticsData
 * @property BinaryColumnStatisticsData|null $BinaryColumnStatisticsData
 */
class ColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     Type: 'BOOLEAN'|'DATE'|'DECIMAL'|'DOUBLE'|'LONG'|'STRING'|'BINARY',
     *     BooleanColumnStatisticsData?: BooleanColumnStatisticsData|null,
     *     DateColumnStatisticsData?: DateColumnStatisticsData|null,
     *     DecimalColumnStatisticsData?: DecimalColumnStatisticsData|null,
     *     DoubleColumnStatisticsData?: DoubleColumnStatisticsData|null,
     *     LongColumnStatisticsData?: LongColumnStatisticsData|null,
     *     StringColumnStatisticsData?: StringColumnStatisticsData|null,
     *     BinaryColumnStatisticsData?: BinaryColumnStatisticsData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
