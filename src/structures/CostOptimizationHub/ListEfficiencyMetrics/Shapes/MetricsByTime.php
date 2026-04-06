<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEfficiencyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $score
 * @property double|null $savings
 * @property double|null $spend
 * @property string|null $timestamp
 */
class MetricsByTime extends Shape
{
    /**
     * @param array{
     *     score?: double|null,
     *     savings?: double|null,
     *     spend?: double|null,
     *     timestamp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
