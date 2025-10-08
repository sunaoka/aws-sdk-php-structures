<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartLabelDetection;

trait StartLabelDetectionTrait
{
    /**
     * @param StartLabelDetectionRequest $args
     * @return StartLabelDetectionResponse
     */
    public function startLabelDetection(StartLabelDetectionRequest $args)
    {
        $result = parent::startLabelDetection($args->toArray());
        return new StartLabelDetectionResponse($result->toArray());
    }
}
