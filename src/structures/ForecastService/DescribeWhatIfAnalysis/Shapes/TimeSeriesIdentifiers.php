<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource|null $DataSource
 * @property Schema|null $Schema
 * @property string|null $Format
 */
class TimeSeriesIdentifiers extends Shape
{
    /**
     * @param array{
     *     DataSource?: DataSource|null,
     *     Schema?: Schema|null,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
