<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RequestBasedServiceLevelIndicatorMetric $RequestBasedSliMetric
 * @property double|null $MetricThreshold
 * @property 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'|null $ComparisonOperator
 */
class RequestBasedServiceLevelIndicator extends Shape
{
    /**
     * @param array{
     *     RequestBasedSliMetric: RequestBasedServiceLevelIndicatorMetric,
     *     MetricThreshold?: double|null,
     *     ComparisonOperator?: 'GreaterThanOrEqualTo'|'GreaterThan'|'LessThan'|'LessThanOrEqualTo'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
