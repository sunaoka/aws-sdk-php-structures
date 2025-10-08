<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\PutRecommendationFeedback;

trait PutRecommendationFeedbackTrait
{
    /**
     * @param PutRecommendationFeedbackRequest $args
     * @return PutRecommendationFeedbackResponse
     */
    public function putRecommendationFeedback(PutRecommendationFeedbackRequest $args)
    {
        $result = parent::putRecommendationFeedback($args->toArray());
        return new PutRecommendationFeedbackResponse($result->toArray());
    }
}
