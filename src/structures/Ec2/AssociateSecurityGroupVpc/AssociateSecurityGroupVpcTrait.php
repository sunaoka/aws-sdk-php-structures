<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateSecurityGroupVpc;

trait AssociateSecurityGroupVpcTrait
{
    /**
     * @param AssociateSecurityGroupVpcRequest $args
     * @return AssociateSecurityGroupVpcResponse
     */
    public function associateSecurityGroupVpc(AssociateSecurityGroupVpcRequest $args)
    {
        $result = parent::associateSecurityGroupVpc($args->toArray());
        return new AssociateSecurityGroupVpcResponse($result->toArray());
    }
}
