<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeEndpoints;

trait DescribeEndpointsTrait
{
    /**
     * @param DescribeEndpointsRequest $args
     * @return DescribeEndpointsResponse
     */
    public function describeEndpoints(DescribeEndpointsRequest $args)
    {
        $result = parent::describeEndpoints($args->toArray());
        return new DescribeEndpointsResponse($result->toArray());
    }
}
