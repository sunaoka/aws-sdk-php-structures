<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VARCHAR'|'BOOLEAN'|'BIGINT'|'DOUBLE'|'TIMESTAMP'|'DATE'|'TIME'|'INTERVAL_DAY_TO_SECOND'|'INTERVAL_YEAR_TO_MONTH'|'UNKNOWN'|'INTEGER' $ScalarType
 * @property ColumnInfo $ArrayColumnInfo
 * @property ColumnInfo $TimeSeriesMeasureValueColumnInfo
 * @property list<ColumnInfo> $RowColumnInfo
 */
class Type extends Shape
{
    /**
     * @param array{
     *     ScalarType?: 'VARCHAR'|'BOOLEAN'|'BIGINT'|'DOUBLE'|'TIMESTAMP'|'DATE'|'TIME'|'INTERVAL_DAY_TO_SECOND'|'INTERVAL_YEAR_TO_MONTH'|'UNKNOWN'|'INTEGER',
     *     ArrayColumnInfo?: ColumnInfo,
     *     TimeSeriesMeasureValueColumnInfo?: ColumnInfo,
     *     RowColumnInfo?: list<ColumnInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
