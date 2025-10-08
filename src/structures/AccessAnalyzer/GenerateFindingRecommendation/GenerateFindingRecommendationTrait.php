<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GenerateFindingRecommendation;

trait GenerateFindingRecommendationTrait
{
    /**
     * @param GenerateFindingRecommendationRequest $args
     * @return void
     */
    public function generateFindingRecommendation(GenerateFindingRecommendationRequest $args)
    {
        parent::generateFindingRecommendation($args->toArray());
    }
}
