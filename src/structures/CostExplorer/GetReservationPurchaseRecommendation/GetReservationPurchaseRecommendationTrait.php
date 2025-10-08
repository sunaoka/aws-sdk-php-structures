<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation;

trait GetReservationPurchaseRecommendationTrait
{
    /**
     * @param GetReservationPurchaseRecommendationRequest $args
     * @return GetReservationPurchaseRecommendationResponse
     */
    public function getReservationPurchaseRecommendation(GetReservationPurchaseRecommendationRequest $args)
    {
        $result = parent::getReservationPurchaseRecommendation($args->toArray());
        return new GetReservationPurchaseRecommendationResponse($result->toArray());
    }
}
