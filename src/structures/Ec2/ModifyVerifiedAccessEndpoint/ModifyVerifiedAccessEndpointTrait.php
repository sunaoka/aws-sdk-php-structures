<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint;

trait ModifyVerifiedAccessEndpointTrait
{
    /**
     * @param ModifyVerifiedAccessEndpointRequest $args
     * @return ModifyVerifiedAccessEndpointResponse
     */
    public function modifyVerifiedAccessEndpoint(ModifyVerifiedAccessEndpointRequest $args)
    {
        $result = parent::modifyVerifiedAccessEndpoint($args->toArray());
        return new ModifyVerifiedAccessEndpointResponse($result->toArray());
    }
}
