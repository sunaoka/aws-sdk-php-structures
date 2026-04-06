<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceIssueDetails|null $PerformanceIssueDetails
 */
class IssueDetails extends Shape
{
    /**
     * @param array{PerformanceIssueDetails?: PerformanceIssueDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
