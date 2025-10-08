<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateSubnetCidrBlock;

trait DisassociateSubnetCidrBlockTrait
{
    /**
     * @param DisassociateSubnetCidrBlockRequest $args
     * @return DisassociateSubnetCidrBlockResponse
     */
    public function disassociateSubnetCidrBlock(DisassociateSubnetCidrBlockRequest $args)
    {
        $result = parent::disassociateSubnetCidrBlock($args->toArray());
        return new DisassociateSubnetCidrBlockResponse($result->toArray());
    }
}
