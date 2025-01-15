<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsReferenceScalar|null $ReferenceScalar
 * @property PerformanceInsightsReferenceMetric|null $ReferenceMetric
 */
class PerformanceInsightsReferenceComparisonValues extends Shape
{
    /**
     * @param array{
     *     ReferenceScalar?: PerformanceInsightsReferenceScalar|null,
     *     ReferenceMetric?: PerformanceInsightsReferenceMetric|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
