<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metric
 * @property MetricDimension|null $metricDimension
 * @property bool|null $exportMetric
 */
class MetricToRetain extends Shape
{
    /**
     * @param array{
     *     metric: string,
     *     metricDimension?: MetricDimension|null,
     *     exportMetric?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
