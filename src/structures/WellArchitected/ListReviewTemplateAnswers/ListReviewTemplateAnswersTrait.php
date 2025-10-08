<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers;

trait ListReviewTemplateAnswersTrait
{
    /**
     * @param ListReviewTemplateAnswersRequest $args
     * @return ListReviewTemplateAnswersResponse
     */
    public function listReviewTemplateAnswers(ListReviewTemplateAnswersRequest $args)
    {
        $result = parent::listReviewTemplateAnswers($args->toArray());
        return new ListReviewTemplateAnswersResponse($result->toArray());
    }
}
