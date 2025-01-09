<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RequestBasedServiceLevelIndicatorMetric $RequestBasedSliMetric
 * @property double $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo' $ComparisonOperator
 */
class RequestBasedServiceLevelIndicator extends Shape
{
    /**
     * @param array{
     *     RequestBasedSliMetric: RequestBasedServiceLevelIndicatorMetric,
     *     MetricThreshold?: double,
     *     ComparisonOperator?: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
