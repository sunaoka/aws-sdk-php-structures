<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateVpcCidrBlock;

trait DisassociateVpcCidrBlockTrait
{
    /**
     * @param DisassociateVpcCidrBlockRequest $args
     * @return DisassociateVpcCidrBlockResponse
     */
    public function disassociateVpcCidrBlock(DisassociateVpcCidrBlockRequest $args)
    {
        $result = parent::disassociateVpcCidrBlock($args->toArray());
        return new DisassociateVpcCidrBlockResponse($result->toArray());
    }
}
