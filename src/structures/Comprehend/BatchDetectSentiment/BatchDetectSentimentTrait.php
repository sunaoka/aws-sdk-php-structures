<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSentiment;

trait BatchDetectSentimentTrait
{
    /**
     * @param BatchDetectSentimentRequest $args
     * @return BatchDetectSentimentResponse
     */
    public function batchDetectSentiment(BatchDetectSentimentRequest $args)
    {
        $result = parent::batchDetectSentiment($args->toArray());
        return new BatchDetectSentimentResponse($result->toArray());
    }
}
