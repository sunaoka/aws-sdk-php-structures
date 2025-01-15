<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RequestBasedServiceLevelIndicatorMetricConfig $RequestBasedSliMetricConfig
 * @property double|null $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'|null $ComparisonOperator
 */
class RequestBasedServiceLevelIndicatorConfig extends Shape
{
    /**
     * @param array{
     *     RequestBasedSliMetricConfig: RequestBasedServiceLevelIndicatorMetricConfig,
     *     MetricThreshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
