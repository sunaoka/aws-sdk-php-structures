<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property PerformanceInsightsReferenceComparisonValues $ComparisonValues
 */
class PerformanceInsightsReferenceData extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ComparisonValues?: PerformanceInsightsReferenceComparisonValues
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
