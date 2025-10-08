<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\BatchStartRecommendations;

trait BatchStartRecommendationsTrait
{
    /**
     * @param BatchStartRecommendationsRequest $args
     * @return BatchStartRecommendationsResponse
     */
    public function batchStartRecommendations(BatchStartRecommendationsRequest $args)
    {
        $result = parent::batchStartRecommendations($args->toArray());
        return new BatchStartRecommendationsResponse($result->toArray());
    }
}
