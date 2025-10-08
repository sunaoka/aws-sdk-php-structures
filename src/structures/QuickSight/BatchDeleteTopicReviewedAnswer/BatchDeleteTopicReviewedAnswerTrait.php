<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteTopicReviewedAnswer;

trait BatchDeleteTopicReviewedAnswerTrait
{
    /**
     * @param BatchDeleteTopicReviewedAnswerRequest $args
     * @return BatchDeleteTopicReviewedAnswerResponse
     */
    public function batchDeleteTopicReviewedAnswer(BatchDeleteTopicReviewedAnswerRequest $args)
    {
        $result = parent::batchDeleteTopicReviewedAnswer($args->toArray());
        return new BatchDeleteTopicReviewedAnswerResponse($result->toArray());
    }
}
