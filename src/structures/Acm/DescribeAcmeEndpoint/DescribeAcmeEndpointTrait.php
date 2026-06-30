<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeEndpoint;

trait DescribeAcmeEndpointTrait
{
    /**
     * @param DescribeAcmeEndpointRequest $args
     * @return DescribeAcmeEndpointResponse
     */
    public function describeAcmeEndpoint(DescribeAcmeEndpointRequest $args)
    {
        $result = parent::describeAcmeEndpoint($args->toArray());
        return new DescribeAcmeEndpointResponse($result->toArray());
    }
}
