<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentStrategies;

trait GetApplicationComponentStrategiesTrait
{
    /**
     * @param GetApplicationComponentStrategiesRequest $args
     * @return GetApplicationComponentStrategiesResponse
     */
    public function getApplicationComponentStrategies(GetApplicationComponentStrategiesRequest $args)
    {
        $result = parent::getApplicationComponentStrategies($args->toArray());
        return new GetApplicationComponentStrategiesResponse($result->toArray());
    }
}
