<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContributorInsights;

trait DescribeContributorInsightsTrait
{
    /**
     * @param DescribeContributorInsightsRequest $args
     * @return DescribeContributorInsightsResponse
     */
    public function describeContributorInsights(DescribeContributorInsightsRequest $args)
    {
        $result = parent::describeContributorInsights($args->toArray());
        return new DescribeContributorInsightsResponse($result->toArray());
    }
}
