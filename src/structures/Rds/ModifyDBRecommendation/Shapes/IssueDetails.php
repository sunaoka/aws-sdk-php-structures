<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceIssueDetails $PerformanceIssueDetails
 */
class IssueDetails extends Shape
{
    /**
     * @param array{PerformanceIssueDetails?: PerformanceIssueDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
