<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateVpcCidrBlock;

trait AssociateVpcCidrBlockTrait
{
    /**
     * @param AssociateVpcCidrBlockRequest $args
     * @return AssociateVpcCidrBlockResponse
     */
    public function associateVpcCidrBlock(AssociateVpcCidrBlockRequest $args)
    {
        $result = parent::associateVpcCidrBlock($args->toArray());
        return new AssociateVpcCidrBlockResponse($result->toArray());
    }
}
