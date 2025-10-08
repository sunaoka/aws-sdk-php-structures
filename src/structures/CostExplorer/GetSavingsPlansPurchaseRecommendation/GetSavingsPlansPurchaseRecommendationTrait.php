<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation;

trait GetSavingsPlansPurchaseRecommendationTrait
{
    /**
     * @param GetSavingsPlansPurchaseRecommendationRequest $args
     * @return GetSavingsPlansPurchaseRecommendationResponse
     */
    public function getSavingsPlansPurchaseRecommendation(GetSavingsPlansPurchaseRecommendationRequest $args)
    {
        $result = parent::getSavingsPlansPurchaseRecommendation($args->toArray());
        return new GetSavingsPlansPurchaseRecommendationResponse($result->toArray());
    }
}
