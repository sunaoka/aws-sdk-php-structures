<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config $S3Config
 * @property Schema $Schema
 * @property string|null $Format
 * @property string|null $TimestampFormat
 */
class TimeSeriesReplacementsDataSource extends Shape
{
    /**
     * @param array{
     *     S3Config: S3Config,
     *     Schema: Schema,
     *     Format?: string|null,
     *     TimestampFormat?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
