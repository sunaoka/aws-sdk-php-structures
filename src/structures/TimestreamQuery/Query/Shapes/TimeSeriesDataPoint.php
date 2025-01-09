<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Time
 * @property Datum $Value
 */
class TimeSeriesDataPoint extends Shape
{
    /**
     * @param array{
     *     Time: string,
     *     Value: Datum
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
