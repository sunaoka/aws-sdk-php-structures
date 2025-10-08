<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint;

trait DescribeOriginEndpointTrait
{
    /**
     * @param DescribeOriginEndpointRequest $args
     * @return DescribeOriginEndpointResponse
     */
    public function describeOriginEndpoint(DescribeOriginEndpointRequest $args)
    {
        $result = parent::describeOriginEndpoint($args->toArray());
        return new DescribeOriginEndpointResponse($result->toArray());
    }
}
