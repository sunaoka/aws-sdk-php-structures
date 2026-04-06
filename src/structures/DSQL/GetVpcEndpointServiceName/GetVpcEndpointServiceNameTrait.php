<?php

namespace Sunaoka\Aws\Structures\DSQL\GetVpcEndpointServiceName;

trait GetVpcEndpointServiceNameTrait
{
    /**
     * @param GetVpcEndpointServiceNameRequest $args
     * @return GetVpcEndpointServiceNameResponse
     */
    public function getVpcEndpointServiceName(GetVpcEndpointServiceNameRequest $args)
    {
        $result = parent::getVpcEndpointServiceName($args->toArray());
        return new GetVpcEndpointServiceNameResponse($result->toArray());
    }
}
