<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config $S3Config
 * @property Schema $Schema
 * @property string $Format
 * @property string $TimestampFormat
 */
class TimeSeriesReplacementsDataSource extends Shape
{
    /**
     * @param array{
     *     S3Config: S3Config,
     *     Schema: Schema,
     *     Format?: string,
     *     TimestampFormat?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
