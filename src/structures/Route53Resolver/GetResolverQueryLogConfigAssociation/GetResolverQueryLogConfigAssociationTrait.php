<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfigAssociation;

trait GetResolverQueryLogConfigAssociationTrait
{
    /**
     * @param GetResolverQueryLogConfigAssociationRequest $args
     * @return GetResolverQueryLogConfigAssociationResponse
     */
    public function getResolverQueryLogConfigAssociation(GetResolverQueryLogConfigAssociationRequest $args)
    {
        $result = parent::getResolverQueryLogConfigAssociation($args->toArray());
        return new GetResolverQueryLogConfigAssociationResponse($result->toArray());
    }
}
