<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights;

trait SearchInsightsTrait
{
    /**
     * @param SearchInsightsRequest $args
     * @return SearchInsightsResponse
     */
    public function searchInsights(SearchInsightsRequest $args)
    {
        $result = parent::searchInsights($args->toArray());
        return new SearchInsightsResponse($result->toArray());
    }
}
