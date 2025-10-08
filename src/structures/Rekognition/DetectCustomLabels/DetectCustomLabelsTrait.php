<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectCustomLabels;

trait DetectCustomLabelsTrait
{
    /**
     * @param DetectCustomLabelsRequest $args
     * @return DetectCustomLabelsResponse
     */
    public function detectCustomLabels(DetectCustomLabelsRequest $args)
    {
        $result = parent::detectCustomLabels($args->toArray());
        return new DetectCustomLabelsResponse($result->toArray());
    }
}
