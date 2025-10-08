<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateAnswer;

trait GetReviewTemplateAnswerTrait
{
    /**
     * @param GetReviewTemplateAnswerRequest $args
     * @return GetReviewTemplateAnswerResponse
     */
    public function getReviewTemplateAnswer(GetReviewTemplateAnswerRequest $args)
    {
        $result = parent::getReviewTemplateAnswer($args->toArray());
        return new GetReviewTemplateAnswerResponse($result->toArray());
    }
}
