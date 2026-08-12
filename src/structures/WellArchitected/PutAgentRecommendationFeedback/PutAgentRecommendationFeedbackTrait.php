<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentRecommendationFeedback;

trait PutAgentRecommendationFeedbackTrait
{
    /**
     * @param PutAgentRecommendationFeedbackRequest $args
     * @return PutAgentRecommendationFeedbackResponse
     */
    public function putAgentRecommendationFeedback(PutAgentRecommendationFeedbackRequest $args)
    {
        $result = parent::putAgentRecommendationFeedback($args->toArray());
        return new PutAgentRecommendationFeedbackResponse($result->toArray());
    }
}
