<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection;

trait GetSegmentDetectionTrait
{
    /**
     * @param GetSegmentDetectionRequest $args
     * @return GetSegmentDetectionResponse
     */
    public function getSegmentDetection(GetSegmentDetectionRequest $args)
    {
        $result = parent::getSegmentDetection($args->toArray());
        return new GetSegmentDetectionResponse($result->toArray());
    }
}
