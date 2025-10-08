<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListContributorInsights;

trait ListContributorInsightsTrait
{
    /**
     * @param ListContributorInsightsRequest $args
     * @return ListContributorInsightsResponse
     */
    public function listContributorInsights(ListContributorInsightsRequest $args)
    {
        $result = parent::listContributorInsights($args->toArray());
        return new ListContributorInsightsResponse($result->toArray());
    }
}
