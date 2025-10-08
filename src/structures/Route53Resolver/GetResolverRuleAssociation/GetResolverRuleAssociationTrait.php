<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverRuleAssociation;

trait GetResolverRuleAssociationTrait
{
    /**
     * @param GetResolverRuleAssociationRequest $args
     * @return GetResolverRuleAssociationResponse
     */
    public function getResolverRuleAssociation(GetResolverRuleAssociationRequest $args)
    {
        $result = parent::getResolverRuleAssociation($args->toArray());
        return new GetResolverRuleAssociationResponse($result->toArray());
    }
}
