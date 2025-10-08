<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers;

trait ListTopicReviewedAnswersTrait
{
    /**
     * @param ListTopicReviewedAnswersRequest $args
     * @return ListTopicReviewedAnswersResponse
     */
    public function listTopicReviewedAnswers(ListTopicReviewedAnswersRequest $args)
    {
        $result = parent::listTopicReviewedAnswers($args->toArray());
        return new ListTopicReviewedAnswersResponse($result->toArray());
    }
}
