<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 * @property 'FAILED'|'COMPLETED' $Status
 * @property 'QUOTA_EXCEEDED'|'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|'INVALID_ANALYSIS_CONFIGURATION'|'INTERNAL_ERROR' $FailureCode
 */
class PostContactSummary extends Shape
{
    /**
     * @param array{
     *     Content?: string,
     *     Status: 'FAILED'|'COMPLETED',
     *     FailureCode?: 'QUOTA_EXCEEDED'|'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|'INVALID_ANALYSIS_CONFIGURATION'|'INTERNAL_ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
