<?php

namespace Sunaoka\Aws\Structures\DataSync\GenerateRecommendations;

trait GenerateRecommendationsTrait
{
    /**
     * @param GenerateRecommendationsRequest $args
     * @return GenerateRecommendationsResponse
     */
    public function generateRecommendations(GenerateRecommendationsRequest $args)
    {
        $result = parent::generateRecommendations($args->toArray());
        return new GenerateRecommendationsResponse($result->toArray());
    }
}
