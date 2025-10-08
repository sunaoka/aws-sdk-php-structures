<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences;

trait GetPortfolioPreferencesTrait
{
    /**
     * @param GetPortfolioPreferencesRequest $args
     * @return GetPortfolioPreferencesResponse
     */
    public function getPortfolioPreferences(GetPortfolioPreferencesRequest $args)
    {
        $result = parent::getPortfolioPreferences($args->toArray());
        return new GetPortfolioPreferencesResponse($result->toArray());
    }
}
