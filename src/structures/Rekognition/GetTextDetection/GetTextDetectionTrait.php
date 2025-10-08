<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetTextDetection;

trait GetTextDetectionTrait
{
    /**
     * @param GetTextDetectionRequest $args
     * @return GetTextDetectionResponse
     */
    public function getTextDetection(GetTextDetectionRequest $args)
    {
        $result = parent::getTextDetection($args->toArray());
        return new GetTextDetectionResponse($result->toArray());
    }
}
