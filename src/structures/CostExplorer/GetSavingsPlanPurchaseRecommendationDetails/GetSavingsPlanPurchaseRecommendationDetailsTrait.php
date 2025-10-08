<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlanPurchaseRecommendationDetails;

trait GetSavingsPlanPurchaseRecommendationDetailsTrait
{
    /**
     * @param GetSavingsPlanPurchaseRecommendationDetailsRequest $args
     * @return GetSavingsPlanPurchaseRecommendationDetailsResponse
     */
    public function getSavingsPlanPurchaseRecommendationDetails(
        GetSavingsPlanPurchaseRecommendationDetailsRequest $args,
    ) {
        $result = parent::getSavingsPlanPurchaseRecommendationDetails($args->toArray());
        return new GetSavingsPlanPurchaseRecommendationDetailsResponse($result->toArray());
    }
}
