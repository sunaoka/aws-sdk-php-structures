<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegment;

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
