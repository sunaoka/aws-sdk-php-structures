<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartRecommendations;

trait StartRecommendationsTrait
{
    /**
     * @param StartRecommendationsRequest $args
     * @return void
     */
    public function startRecommendations(StartRecommendationsRequest $args)
    {
        parent::startRecommendations($args->toArray());
    }
}
