<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus;

trait BatchUpdateRecommendationStatusTrait
{
    /**
     * @param BatchUpdateRecommendationStatusRequest $args
     * @return BatchUpdateRecommendationStatusResponse
     */
    public function batchUpdateRecommendationStatus(BatchUpdateRecommendationStatusRequest $args)
    {
        $result = parent::batchUpdateRecommendationStatus($args->toArray());
        return new BatchUpdateRecommendationStatusResponse($result->toArray());
    }
}
