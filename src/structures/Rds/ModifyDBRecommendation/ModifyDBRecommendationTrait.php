<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation;

trait ModifyDBRecommendationTrait
{
    /**
     * @param ModifyDBRecommendationRequest $args
     * @return ModifyDBRecommendationResponse
     */
    public function modifyDBRecommendation(ModifyDBRecommendationRequest $args)
    {
        $result = parent::modifyDBRecommendation($args->toArray());
        return new ModifyDBRecommendationResponse($result->toArray());
    }
}
