<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcPeeringConnectionOptions;

trait ModifyVpcPeeringConnectionOptionsTrait
{
    /**
     * @param ModifyVpcPeeringConnectionOptionsRequest $args
     * @return ModifyVpcPeeringConnectionOptionsResponse
     */
    public function modifyVpcPeeringConnectionOptions(ModifyVpcPeeringConnectionOptionsRequest $args)
    {
        $result = parent::modifyVpcPeeringConnectionOptions($args->toArray());
        return new ModifyVpcPeeringConnectionOptionsResponse($result->toArray());
    }
}
