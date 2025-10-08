<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateSecurityGroupVpc;

trait DisassociateSecurityGroupVpcTrait
{
    /**
     * @param DisassociateSecurityGroupVpcRequest $args
     * @return DisassociateSecurityGroupVpcResponse
     */
    public function disassociateSecurityGroupVpc(DisassociateSecurityGroupVpcRequest $args)
    {
        $result = parent::disassociateSecurityGroupVpc($args->toArray());
        return new DisassociateSecurityGroupVpcResponse($result->toArray());
    }
}
