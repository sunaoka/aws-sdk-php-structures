<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments;

trait ListRealtimeContactAnalysisSegmentsTrait
{
    /**
     * @param ListRealtimeContactAnalysisSegmentsRequest $args
     * @return ListRealtimeContactAnalysisSegmentsResponse
     */
    public function listRealtimeContactAnalysisSegments(ListRealtimeContactAnalysisSegmentsRequest $args)
    {
        $result = parent::listRealtimeContactAnalysisSegments($args->toArray());
        return new ListRealtimeContactAnalysisSegmentsResponse($result->toArray());
    }
}
