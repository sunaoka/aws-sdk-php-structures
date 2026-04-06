<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceConnectEndpoint;

trait ModifyInstanceConnectEndpointTrait
{
    /**
     * @param ModifyInstanceConnectEndpointRequest $args
     * @return ModifyInstanceConnectEndpointResponse
     */
    public function modifyInstanceConnectEndpoint(ModifyInstanceConnectEndpointRequest $args)
    {
        $result = parent::modifyInstanceConnectEndpoint($args->toArray());
        return new ModifyInstanceConnectEndpointResponse($result->toArray());
    }
}
