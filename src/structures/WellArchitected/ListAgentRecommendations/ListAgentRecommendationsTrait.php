<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendations;

trait ListAgentRecommendationsTrait
{
    /**
     * @param ListAgentRecommendationsRequest $args
     * @return ListAgentRecommendationsResponse
     */
    public function listAgentRecommendations(ListAgentRecommendationsRequest $args)
    {
        $result = parent::listAgentRecommendations($args->toArray());
        return new ListAgentRecommendationsResponse($result->toArray());
    }
}
