<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RealTimeContactAnalysisTranscriptItemWithContent> $TranscriptItems
 */
class RealTimeContactAnalysisIssueDetected extends Shape
{
    /**
     * @param array{TranscriptItems: list<RealTimeContactAnalysisTranscriptItemWithContent>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
