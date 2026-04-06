<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateRecommendation;

trait UpdateRecommendationTrait
{
    /**
     * @param UpdateRecommendationRequest $args
     * @return UpdateRecommendationResponse
     */
    public function updateRecommendation(UpdateRecommendationRequest $args)
    {
        $result = parent::updateRecommendation($args->toArray());
        return new UpdateRecommendationResponse($result->toArray());
    }
}
