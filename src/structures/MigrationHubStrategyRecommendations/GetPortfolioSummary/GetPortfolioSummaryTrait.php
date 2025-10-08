<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary;

trait GetPortfolioSummaryTrait
{
    /**
     * @param GetPortfolioSummaryRequest $args
     * @return GetPortfolioSummaryResponse
     */
    public function getPortfolioSummary(GetPortfolioSummaryRequest $args)
    {
        $result = parent::getPortfolioSummary($args->toArray());
        return new GetPortfolioSummaryResponse($result->toArray());
    }
}
