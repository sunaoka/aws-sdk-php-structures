<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerStrategies;

trait GetServerStrategiesTrait
{
    /**
     * @param GetServerStrategiesRequest $args
     * @return GetServerStrategiesResponse
     */
    public function getServerStrategies(GetServerStrategiesRequest $args)
    {
        $result = parent::getServerStrategies($args->toArray());
        return new GetServerStrategiesResponse($result->toArray());
    }
}
