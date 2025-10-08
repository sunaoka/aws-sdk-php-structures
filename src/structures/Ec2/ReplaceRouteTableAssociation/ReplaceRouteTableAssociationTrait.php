<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceRouteTableAssociation;

trait ReplaceRouteTableAssociationTrait
{
    /**
     * @param ReplaceRouteTableAssociationRequest $args
     * @return ReplaceRouteTableAssociationResponse
     */
    public function replaceRouteTableAssociation(ReplaceRouteTableAssociationRequest $args)
    {
        $result = parent::replaceRouteTableAssociation($args->toArray());
        return new ReplaceRouteTableAssociationResponse($result->toArray());
    }
}
