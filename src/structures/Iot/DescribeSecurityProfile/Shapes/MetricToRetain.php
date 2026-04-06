<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metric
 * @property MetricDimension|null $metricDimension
 */
class MetricToRetain extends Shape
{
    /**
     * @param array{
     *     metric: string,
     *     metricDimension?: MetricDimension|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
