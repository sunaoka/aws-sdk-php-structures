<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceLevelIndicatorMetricConfig $SliMetricConfig
 * @property double|null $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'|null $ComparisonOperator
 */
class ServiceLevelIndicatorConfig extends Shape
{
    /**
     * @param array{
     *     SliMetricConfig: ServiceLevelIndicatorMetricConfig,
     *     MetricThreshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
