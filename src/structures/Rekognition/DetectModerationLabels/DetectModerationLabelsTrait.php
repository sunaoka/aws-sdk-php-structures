<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels;

trait DetectModerationLabelsTrait
{
    /**
     * @param DetectModerationLabelsRequest $args
     * @return DetectModerationLabelsResponse
     */
    public function detectModerationLabels(DetectModerationLabelsRequest $args)
    {
        $result = parent::detectModerationLabels($args->toArray());
        return new DetectModerationLabelsResponse($result->toArray());
    }
}
