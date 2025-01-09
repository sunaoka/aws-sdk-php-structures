<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScalarValue
 * @property list<TimeSeriesDataPoint> $TimeSeriesValue
 * @property list<Datum> $ArrayValue
 * @property Row $RowValue
 * @property bool $NullValue
 */
class Datum extends Shape
{
    /**
     * @param array{
     *     ScalarValue?: string,
     *     TimeSeriesValue?: list<TimeSeriesDataPoint>,
     *     ArrayValue?: list<Datum>,
     *     RowValue?: Row,
     *     NullValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
