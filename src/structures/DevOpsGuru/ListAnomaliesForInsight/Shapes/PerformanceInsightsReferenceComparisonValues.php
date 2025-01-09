<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsReferenceScalar $ReferenceScalar
 * @property PerformanceInsightsReferenceMetric $ReferenceMetric
 */
class PerformanceInsightsReferenceComparisonValues extends Shape
{
    /**
     * @param array{
     *     ReferenceScalar?: PerformanceInsightsReferenceScalar,
     *     ReferenceMetric?: PerformanceInsightsReferenceMetric
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
