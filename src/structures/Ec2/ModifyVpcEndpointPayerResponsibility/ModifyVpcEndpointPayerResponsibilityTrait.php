<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointPayerResponsibility;

trait ModifyVpcEndpointPayerResponsibilityTrait
{
    /**
     * @param ModifyVpcEndpointPayerResponsibilityRequest $args
     * @return ModifyVpcEndpointPayerResponsibilityResponse
     */
    public function modifyVpcEndpointPayerResponsibility(ModifyVpcEndpointPayerResponsibilityRequest $args)
    {
        $result = parent::modifyVpcEndpointPayerResponsibility($args->toArray());
        return new ModifyVpcEndpointPayerResponsibilityResponse($result->toArray());
    }
}
