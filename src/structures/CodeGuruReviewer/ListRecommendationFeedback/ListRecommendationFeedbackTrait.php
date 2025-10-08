<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendationFeedback;

trait ListRecommendationFeedbackTrait
{
    /**
     * @param ListRecommendationFeedbackRequest $args
     * @return ListRecommendationFeedbackResponse
     */
    public function listRecommendationFeedback(ListRecommendationFeedbackRequest $args)
    {
        $result = parent::listRecommendationFeedback($args->toArray());
        return new ListRecommendationFeedbackResponse($result->toArray());
    }
}
