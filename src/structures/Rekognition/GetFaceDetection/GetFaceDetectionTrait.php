<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection;

trait GetFaceDetectionTrait
{
    /**
     * @param GetFaceDetectionRequest $args
     * @return GetFaceDetectionResponse
     */
    public function getFaceDetection(GetFaceDetectionRequest $args)
    {
        $result = parent::getFaceDetection($args->toArray());
        return new GetFaceDetectionResponse($result->toArray());
    }
}
