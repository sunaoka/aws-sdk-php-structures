<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection;

trait StartSegmentDetectionTrait
{
    /**
     * @param StartSegmentDetectionRequest $args
     * @return StartSegmentDetectionResponse
     */
    public function startSegmentDetection(StartSegmentDetectionRequest $args)
    {
        $result = parent::startSegmentDetection($args->toArray());
        return new StartSegmentDetectionResponse($result->toArray());
    }
}
