<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RequestBasedServiceLevelIndicatorMetricConfig $RequestBasedSliMetricConfig
 * @property double $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo' $ComparisonOperator
 */
class RequestBasedServiceLevelIndicatorConfig extends Shape
{
    /**
     * @param array{
     *     RequestBasedSliMetricConfig: RequestBasedServiceLevelIndicatorMetricConfig,
     *     MetricThreshold?: double,
     *     ComparisonOperator?: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
