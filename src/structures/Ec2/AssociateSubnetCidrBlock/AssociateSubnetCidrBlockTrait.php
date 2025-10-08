<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateSubnetCidrBlock;

trait AssociateSubnetCidrBlockTrait
{
    /**
     * @param AssociateSubnetCidrBlockRequest $args
     * @return AssociateSubnetCidrBlockResponse
     */
    public function associateSubnetCidrBlock(AssociateSubnetCidrBlockRequest $args)
    {
        $result = parent::associateSubnetCidrBlock($args->toArray());
        return new AssociateSubnetCidrBlockResponse($result->toArray());
    }
}
