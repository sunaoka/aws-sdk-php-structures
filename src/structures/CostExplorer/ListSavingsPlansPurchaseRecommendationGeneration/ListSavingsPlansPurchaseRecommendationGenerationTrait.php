<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListSavingsPlansPurchaseRecommendationGeneration;

trait ListSavingsPlansPurchaseRecommendationGenerationTrait
{
    /**
     * @param ListSavingsPlansPurchaseRecommendationGenerationRequest $args
     * @return ListSavingsPlansPurchaseRecommendationGenerationResponse
     */
    public function listSavingsPlansPurchaseRecommendationGeneration(
        ListSavingsPlansPurchaseRecommendationGenerationRequest $args,
    ) {
        $result = parent::listSavingsPlansPurchaseRecommendationGeneration($args->toArray());
        return new ListSavingsPlansPurchaseRecommendationGenerationResponse($result->toArray());
    }
}
