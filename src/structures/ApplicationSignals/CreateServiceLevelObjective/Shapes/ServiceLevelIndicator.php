<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceLevelIndicatorMetric $SliMetric
 * @property double $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo' $ComparisonOperator
 */
class ServiceLevelIndicator extends Shape
{
    /**
     * @param array{
     *     SliMetric: ServiceLevelIndicatorMetric,
     *     MetricThreshold: double,
     *     ComparisonOperator: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
