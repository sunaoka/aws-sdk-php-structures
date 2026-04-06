<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RealTimeContactAnalysisIssueDetected> $IssuesDetected
 */
class RealTimeContactAnalysisSegmentIssues extends Shape
{
    /**
     * @param array{IssuesDetected: list<RealTimeContactAnalysisIssueDetected>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
