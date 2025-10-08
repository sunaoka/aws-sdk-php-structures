<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartTextDetection;

trait StartTextDetectionTrait
{
    /**
     * @param StartTextDetectionRequest $args
     * @return StartTextDetectionResponse
     */
    public function startTextDetection(StartTextDetectionRequest $args)
    {
        $result = parent::startTextDetection($args->toArray());
        return new StartTextDetectionResponse($result->toArray());
    }
}
