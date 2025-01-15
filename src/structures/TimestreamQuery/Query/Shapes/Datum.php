<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ScalarValue
 * @property list<TimeSeriesDataPoint>|null $TimeSeriesValue
 * @property list<Datum>|null $ArrayValue
 * @property Row|null $RowValue
 * @property bool|null $NullValue
 */
class Datum extends Shape
{
    /**
     * @param array{
     *     ScalarValue?: string|null,
     *     TimeSeriesValue?: list<TimeSeriesDataPoint>|null,
     *     ArrayValue?: list<Datum>|null,
     *     RowValue?: Row|null,
     *     NullValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
