<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationGenerations;

trait ListAgentRecommendationGenerationsTrait
{
    /**
     * @param ListAgentRecommendationGenerationsRequest $args
     * @return ListAgentRecommendationGenerationsResponse
     */
    public function listAgentRecommendationGenerations(ListAgentRecommendationGenerationsRequest $args)
    {
        $result = parent::listAgentRecommendationGenerations($args->toArray());
        return new ListAgentRecommendationGenerationsResponse($result->toArray());
    }
}
