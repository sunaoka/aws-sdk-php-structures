<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContributorInsights;

trait UpdateContributorInsightsTrait
{
    /**
     * @param UpdateContributorInsightsRequest $args
     * @return UpdateContributorInsightsResponse
     */
    public function updateContributorInsights(UpdateContributorInsightsRequest $args)
    {
        $result = parent::updateContributorInsights($args->toArray());
        return new UpdateContributorInsightsResponse($result->toArray());
    }
}
