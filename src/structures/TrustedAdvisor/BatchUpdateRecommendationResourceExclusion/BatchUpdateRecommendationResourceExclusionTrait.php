<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\BatchUpdateRecommendationResourceExclusion;

trait BatchUpdateRecommendationResourceExclusionTrait
{
    /**
     * @param BatchUpdateRecommendationResourceExclusionRequest $args
     * @return BatchUpdateRecommendationResourceExclusionResponse
     */
    public function batchUpdateRecommendationResourceExclusion(
        BatchUpdateRecommendationResourceExclusionRequest $args,
    ) {
        $result = parent::batchUpdateRecommendationResourceExclusion($args->toArray());
        return new BatchUpdateRecommendationResourceExclusionResponse($result->toArray());
    }
}
