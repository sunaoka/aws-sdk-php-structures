<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePayerResponsibility;

trait ModifyVpcEndpointServicePayerResponsibilityTrait
{
    /**
     * @param ModifyVpcEndpointServicePayerResponsibilityRequest $args
     * @return ModifyVpcEndpointServicePayerResponsibilityResponse
     */
    public function modifyVpcEndpointServicePayerResponsibility(ModifyVpcEndpointServicePayerResponsibilityRequest $args)
    {
        $result = parent::modifyVpcEndpointServicePayerResponsibility($args->toArray());
        return new ModifyVpcEndpointServicePayerResponsibilityResponse($result->toArray());
    }
}
