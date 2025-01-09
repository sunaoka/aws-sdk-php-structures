<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource $DataSource
 * @property Schema $Schema
 * @property string $Format
 */
class TimeSeriesIdentifiers extends Shape
{
    /**
     * @param array{
     *     DataSource?: DataSource,
     *     Schema?: Schema,
     *     Format?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
