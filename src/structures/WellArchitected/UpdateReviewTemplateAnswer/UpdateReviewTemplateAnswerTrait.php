<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateAnswer;

trait UpdateReviewTemplateAnswerTrait
{
    /**
     * @param UpdateReviewTemplateAnswerRequest $args
     * @return UpdateReviewTemplateAnswerResponse
     */
    public function updateReviewTemplateAnswer(UpdateReviewTemplateAnswerRequest $args)
    {
        $result = parent::updateReviewTemplateAnswer($args->toArray());
        return new UpdateReviewTemplateAnswerResponse($result->toArray());
    }
}
