<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetStreamForSegments;

trait GetStreamForSegmentsTrait
{
    /**
     * @param GetStreamForSegmentsRequest $args
     * @return GetStreamForSegmentsResponse
     */
    public function getStreamForSegments(GetStreamForSegmentsRequest $args)
    {
        $result = parent::getStreamForSegments($args->toArray());
        return new GetStreamForSegmentsResponse($result->toArray());
    }
}
