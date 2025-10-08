<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegments;

trait GetSegmentsTrait
{
    /**
     * @param GetSegmentsRequest $args
     * @return GetSegmentsResponse
     */
    public function getSegments(GetSegmentsRequest $args)
    {
        $result = parent::getSegments($args->toArray());
        return new GetSegmentsResponse($result->toArray());
    }
}
