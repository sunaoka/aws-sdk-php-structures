<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEndpoint;

trait DescribeEndpointTrait
{
    /**
     * @param DescribeEndpointRequest $args
     * @return DescribeEndpointResponse
     */
    public function describeEndpoint(DescribeEndpointRequest $args)
    {
        $result = parent::describeEndpoint($args->toArray());
        return new DescribeEndpointResponse($result->toArray());
    }
}
