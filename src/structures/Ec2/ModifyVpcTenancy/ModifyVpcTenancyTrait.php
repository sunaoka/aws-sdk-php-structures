<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcTenancy;

trait ModifyVpcTenancyTrait
{
    /**
     * @param ModifyVpcTenancyRequest $args
     * @return ModifyVpcTenancyResponse
     */
    public function modifyVpcTenancy(ModifyVpcTenancyRequest $args)
    {
        $result = parent::modifyVpcTenancy($args->toArray());
        return new ModifyVpcTenancyResponse($result->toArray());
    }
}
