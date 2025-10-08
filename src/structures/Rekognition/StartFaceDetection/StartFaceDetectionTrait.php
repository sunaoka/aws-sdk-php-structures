<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartFaceDetection;

trait StartFaceDetectionTrait
{
    /**
     * @param StartFaceDetectionRequest $args
     * @return StartFaceDetectionResponse
     */
    public function startFaceDetection(StartFaceDetectionRequest $args)
    {
        $result = parent::startFaceDetection($args->toArray());
        return new StartFaceDetectionResponse($result->toArray());
    }
}
