<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentRecommendationStatus;

trait UpdateAgentRecommendationStatusTrait
{
    /**
     * @param UpdateAgentRecommendationStatusRequest $args
     * @return UpdateAgentRecommendationStatusResponse
     */
    public function updateAgentRecommendationStatus(UpdateAgentRecommendationStatusRequest $args)
    {
        $result = parent::updateAgentRecommendationStatus($args->toArray());
        return new UpdateAgentRecommendationStatusResponse($result->toArray());
    }
}
