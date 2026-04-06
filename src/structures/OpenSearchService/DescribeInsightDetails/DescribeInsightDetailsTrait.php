<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInsightDetails;

trait DescribeInsightDetailsTrait
{
    /**
     * @param DescribeInsightDetailsRequest $args
     * @return DescribeInsightDetailsResponse
     */
    public function describeInsightDetails(DescribeInsightDetailsRequest $args)
    {
        $result = parent::describeInsightDetails($args->toArray());
        return new DescribeInsightDetailsResponse($result->toArray());
    }
}
