<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregationAuthorizations;

trait DescribeAggregationAuthorizationsTrait
{
    /**
     * @param DescribeAggregationAuthorizationsRequest $args
     * @return DescribeAggregationAuthorizationsResponse
     */
    public function describeAggregationAuthorizations(DescribeAggregationAuthorizationsRequest $args)
    {
        $result = parent::describeAggregationAuthorizations($args->toArray());
        return new DescribeAggregationAuthorizationsResponse($result->toArray());
    }
}
