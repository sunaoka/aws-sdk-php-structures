<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAuthorization;

trait DescribeEndpointAuthorizationTrait
{
    /**
     * @param DescribeEndpointAuthorizationRequest $args
     * @return DescribeEndpointAuthorizationResponse
     */
    public function describeEndpointAuthorization(DescribeEndpointAuthorizationRequest $args)
    {
        $result = parent::describeEndpointAuthorization($args->toArray());
        return new DescribeEndpointAuthorizationResponse($result->toArray());
    }
}
