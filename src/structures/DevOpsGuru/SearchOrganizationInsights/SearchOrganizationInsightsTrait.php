<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchOrganizationInsights;

trait SearchOrganizationInsightsTrait
{
    /**
     * @param SearchOrganizationInsightsRequest $args
     * @return SearchOrganizationInsightsResponse
     */
    public function searchOrganizationInsights(SearchOrganizationInsightsRequest $args)
    {
        $result = parent::searchOrganizationInsights($args->toArray());
        return new SearchOrganizationInsightsResponse($result->toArray());
    }
}
