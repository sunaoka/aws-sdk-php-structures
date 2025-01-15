<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property PerformanceInsightsReferenceComparisonValues|null $ComparisonValues
 */
class PerformanceInsightsReferenceData extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ComparisonValues?: PerformanceInsightsReferenceComparisonValues|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
