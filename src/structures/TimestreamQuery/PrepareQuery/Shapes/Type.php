<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VARCHAR'|'BOOLEAN'|'BIGINT'|'DOUBLE'|'TIMESTAMP'|'DATE'|'TIME'|'INTERVAL_DAY_TO_SECOND'|'INTERVAL_YEAR_TO_MONTH'|'UNKNOWN'|'INTEGER'|null $ScalarType
 * @property ColumnInfo|null $ArrayColumnInfo
 * @property ColumnInfo|null $TimeSeriesMeasureValueColumnInfo
 * @property list<ColumnInfo>|null $RowColumnInfo
 */
class Type extends Shape
{
    /**
     * @param array{
     *     ScalarType?: 'VARCHAR'|'BOOLEAN'|'BIGINT'|'DOUBLE'|'TIMESTAMP'|'DATE'|'TIME'|'INTERVAL_DAY_TO_SECOND'|'INTERVAL_YEAR_TO_MONTH'|'UNKNOWN'|'INTEGER'|null,
     *     ArrayColumnInfo?: ColumnInfo|null,
     *     TimeSeriesMeasureValueColumnInfo?: ColumnInfo|null,
     *     RowColumnInfo?: list<ColumnInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
