<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment;

trait BatchDetectTargetedSentimentTrait
{
    /**
     * @param BatchDetectTargetedSentimentRequest $args
     * @return BatchDetectTargetedSentimentResponse
     */
    public function batchDetectTargetedSentiment(BatchDetectTargetedSentimentRequest $args)
    {
        $result = parent::batchDetectTargetedSentiment($args->toArray());
        return new BatchDetectTargetedSentimentResponse($result->toArray());
    }
}
