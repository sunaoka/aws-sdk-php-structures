<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metric
 * @property MetricDimension $metricDimension
 * @property bool $exportMetric
 */
class MetricToRetain extends Shape
{
    /**
     * @param array{
     *     metric: string,
     *     metricDimension?: MetricDimension,
     *     exportMetric?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
