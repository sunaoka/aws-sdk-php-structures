<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RealTimeContactAnalysisSegmentTranscript|null $Transcript
 * @property RealTimeContactAnalysisSegmentCategories|null $Categories
 * @property RealTimeContactAnalysisSegmentIssues|null $Issues
 * @property RealTimeContactAnalysisSegmentEvent|null $Event
 * @property RealTimeContactAnalysisSegmentAttachments|null $Attachments
 * @property RealTimeContactAnalysisSegmentPostContactSummary|null $PostContactSummary
 */
class RealtimeContactAnalysisSegment extends Shape
{
    /**
     * @param array{
     *     Transcript?: RealTimeContactAnalysisSegmentTranscript|null,
     *     Categories?: RealTimeContactAnalysisSegmentCategories|null,
     *     Issues?: RealTimeContactAnalysisSegmentIssues|null,
     *     Event?: RealTimeContactAnalysisSegmentEvent|null,
     *     Attachments?: RealTimeContactAnalysisSegmentAttachments|null,
     *     PostContactSummary?: RealTimeContactAnalysisSegmentPostContactSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
