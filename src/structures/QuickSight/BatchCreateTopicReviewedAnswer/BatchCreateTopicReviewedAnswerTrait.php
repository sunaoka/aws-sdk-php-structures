<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer;

trait BatchCreateTopicReviewedAnswerTrait
{
    /**
     * @param BatchCreateTopicReviewedAnswerRequest $args
     * @return BatchCreateTopicReviewedAnswerResponse
     */
    public function batchCreateTopicReviewedAnswer(BatchCreateTopicReviewedAnswerRequest $args)
    {
        $result = parent::batchCreateTopicReviewedAnswer($args->toArray());
        return new BatchCreateTopicReviewedAnswerResponse($result->toArray());
    }
}
