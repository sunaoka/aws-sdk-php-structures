<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Content
 * @property 'FAILED'|'COMPLETED' $Status
 * @property 'QUOTA_EXCEEDED'|'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|'INVALID_ANALYSIS_CONFIGURATION'|'INTERNAL_ERROR'|null $FailureCode
 */
class RealTimeContactAnalysisSegmentPostContactSummary extends Shape
{
    /**
     * @param array{
     *     Content?: string|null,
     *     Status: 'FAILED'|'COMPLETED',
     *     FailureCode?: 'QUOTA_EXCEEDED'|'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|'INVALID_ANALYSIS_CONFIGURATION'|'INTERNAL_ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
