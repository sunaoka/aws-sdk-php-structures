<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeVpcEndpoints;

trait DescribeVpcEndpointsTrait
{
    /**
     * @param DescribeVpcEndpointsRequest $args
     * @return DescribeVpcEndpointsResponse
     */
    public function describeVpcEndpoints(DescribeVpcEndpointsRequest $args)
    {
        $result = parent::describeVpcEndpoints($args->toArray());
        return new DescribeVpcEndpointsResponse($result->toArray());
    }
}
