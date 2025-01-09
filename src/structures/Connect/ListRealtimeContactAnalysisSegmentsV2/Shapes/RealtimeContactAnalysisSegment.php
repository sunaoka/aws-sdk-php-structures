<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RealTimeContactAnalysisSegmentTranscript $Transcript
 * @property RealTimeContactAnalysisSegmentCategories $Categories
 * @property RealTimeContactAnalysisSegmentIssues $Issues
 * @property RealTimeContactAnalysisSegmentEvent $Event
 * @property RealTimeContactAnalysisSegmentAttachments $Attachments
 * @property RealTimeContactAnalysisSegmentPostContactSummary $PostContactSummary
 */
class RealtimeContactAnalysisSegment extends Shape
{
    /**
     * @param array{
     *     Transcript?: RealTimeContactAnalysisSegmentTranscript,
     *     Categories?: RealTimeContactAnalysisSegmentCategories,
     *     Issues?: RealTimeContactAnalysisSegmentIssues,
     *     Event?: RealTimeContactAnalysisSegmentEvent,
     *     Attachments?: RealTimeContactAnalysisSegmentAttachments,
     *     PostContactSummary?: RealTimeContactAnalysisSegmentPostContactSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
