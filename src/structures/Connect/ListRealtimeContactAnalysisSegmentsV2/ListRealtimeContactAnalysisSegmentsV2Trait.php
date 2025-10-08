<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2;

trait ListRealtimeContactAnalysisSegmentsV2Trait
{
    /**
     * @param ListRealtimeContactAnalysisSegmentsV2Request $args
     * @return ListRealtimeContactAnalysisSegmentsV2Response
     */
    public function listRealtimeContactAnalysisSegmentsV2(ListRealtimeContactAnalysisSegmentsV2Request $args)
    {
        $result = parent::listRealtimeContactAnalysisSegmentsV2($args->toArray());
        return new ListRealtimeContactAnalysisSegmentsV2Response($result->toArray());
    }
}
