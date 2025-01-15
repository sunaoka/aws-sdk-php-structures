<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property double|null $MetricValue
 */
class MetricResult extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     MetricValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
