<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSecurityGroupsForVpc;

trait GetSecurityGroupsForVpcTrait
{
    /**
     * @param GetSecurityGroupsForVpcRequest $args
     * @return GetSecurityGroupsForVpcResponse
     */
    public function getSecurityGroupsForVpc(GetSecurityGroupsForVpcRequest $args)
    {
        $result = parent::getSecurityGroupsForVpc($args->toArray());
        return new GetSecurityGroupsForVpcResponse($result->toArray());
    }
}
