<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventType
 * @property string $metricName
 * @property string $expression
 */
class MetricAttribute extends Shape
{
    /**
     * @param array{
     *     eventType: string,
     *     metricName: string,
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
