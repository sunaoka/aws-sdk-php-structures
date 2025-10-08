<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetSegment;

trait GetSegmentTrait
{
    /**
     * @param GetSegmentRequest $args
     * @return GetSegmentResponse
     */
    public function getSegment(GetSegmentRequest $args)
    {
        $result = parent::getSegment($args->toArray());
        return new GetSegmentResponse($result->toArray());
    }
}
