<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection;

trait GetLabelDetectionTrait
{
    /**
     * @param GetLabelDetectionRequest $args
     * @return GetLabelDetectionResponse
     */
    public function getLabelDetection(GetLabelDetectionRequest $args)
    {
        $result = parent::getLabelDetection($args->toArray());
        return new GetLabelDetectionResponse($result->toArray());
    }
}
