<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights;

trait ListOrganizationInsightsTrait
{
    /**
     * @param ListOrganizationInsightsRequest $args
     * @return ListOrganizationInsightsResponse
     */
    public function listOrganizationInsights(ListOrganizationInsightsRequest $args)
    {
        $result = parent::listOrganizationInsights($args->toArray());
        return new ListOrganizationInsightsResponse($result->toArray());
    }
}
