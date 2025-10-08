<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartSavingsPlansPurchaseRecommendationGeneration;

trait StartSavingsPlansPurchaseRecommendationGenerationTrait
{
    /**
     * @param StartSavingsPlansPurchaseRecommendationGenerationRequest $args
     * @return StartSavingsPlansPurchaseRecommendationGenerationResponse
     */
    public function startSavingsPlansPurchaseRecommendationGeneration(StartSavingsPlansPurchaseRecommendationGenerationRequest $args)
    {
        $result = parent::startSavingsPlansPurchaseRecommendationGeneration($args->toArray());
        return new StartSavingsPlansPurchaseRecommendationGenerationResponse($result->toArray());
    }
}
