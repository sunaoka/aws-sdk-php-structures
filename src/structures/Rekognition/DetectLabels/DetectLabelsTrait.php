<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels;

trait DetectLabelsTrait
{
    /**
     * @param DetectLabelsRequest $args
     * @return DetectLabelsResponse
     */
    public function detectLabels(DetectLabelsRequest $args)
    {
        $result = parent::detectLabels($args->toArray());
        return new DetectLabelsResponse($result->toArray());
    }
}
