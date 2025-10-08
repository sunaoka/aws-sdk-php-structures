<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpoint;

trait ModifyVpcEndpointTrait
{
    /**
     * @param ModifyVpcEndpointRequest $args
     * @return ModifyVpcEndpointResponse
     */
    public function modifyVpcEndpoint(ModifyVpcEndpointRequest $args)
    {
        $result = parent::modifyVpcEndpoint($args->toArray());
        return new ModifyVpcEndpointResponse($result->toArray());
    }
}
