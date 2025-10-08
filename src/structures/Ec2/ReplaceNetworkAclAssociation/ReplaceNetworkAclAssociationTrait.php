<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceNetworkAclAssociation;

trait ReplaceNetworkAclAssociationTrait
{
    /**
     * @param ReplaceNetworkAclAssociationRequest $args
     * @return ReplaceNetworkAclAssociationResponse
     */
    public function replaceNetworkAclAssociation(ReplaceNetworkAclAssociationRequest $args)
    {
        $result = parent::replaceNetworkAclAssociation($args->toArray());
        return new ReplaceNetworkAclAssociationResponse($result->toArray());
    }
}
