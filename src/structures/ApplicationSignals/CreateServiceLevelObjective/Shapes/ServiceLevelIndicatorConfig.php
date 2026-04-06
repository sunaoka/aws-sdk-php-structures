<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceLevelIndicatorMetricConfig $SliMetricConfig
 * @property double $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo' $ComparisonOperator
 */
class ServiceLevelIndicatorConfig extends Shape
{
    /**
     * @param array{
     *     SliMetricConfig: ServiceLevelIndicatorMetricConfig,
     *     MetricThreshold: double,
     *     ComparisonOperator: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
