<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUserEndpoint;

trait DescribeAppInstanceUserEndpointTrait
{
    /**
     * @param DescribeAppInstanceUserEndpointRequest $args
     * @return DescribeAppInstanceUserEndpointResponse
     */
    public function describeAppInstanceUserEndpoint(DescribeAppInstanceUserEndpointRequest $args)
    {
        $result = parent::describeAppInstanceUserEndpoint($args->toArray());
        return new DescribeAppInstanceUserEndpointResponse($result->toArray());
    }
}
