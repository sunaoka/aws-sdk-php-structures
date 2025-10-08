<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectTargetedSentiment;

trait DetectTargetedSentimentTrait
{
    /**
     * @param DetectTargetedSentimentRequest $args
     * @return DetectTargetedSentimentResponse
     */
    public function detectTargetedSentiment(DetectTargetedSentimentRequest $args)
    {
        $result = parent::detectTargetedSentiment($args->toArray());
        return new DetectTargetedSentimentResponse($result->toArray());
    }
}
