<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences;

trait PutPortfolioPreferencesTrait
{
    /**
     * @param PutPortfolioPreferencesRequest $args
     * @return PutPortfolioPreferencesResponse
     */
    public function putPortfolioPreferences(PutPortfolioPreferencesRequest $args)
    {
        $result = parent::putPortfolioPreferences($args->toArray());
        return new PutPortfolioPreferencesResponse($result->toArray());
    }
}
