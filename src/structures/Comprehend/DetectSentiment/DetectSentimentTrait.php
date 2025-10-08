<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSentiment;

trait DetectSentimentTrait
{
    /**
     * @param DetectSentimentRequest $args
     * @return DetectSentimentResponse
     */
    public function detectSentiment(DetectSentimentRequest $args)
    {
        $result = parent::detectSentiment($args->toArray());
        return new DetectSentimentResponse($result->toArray());
    }
}
