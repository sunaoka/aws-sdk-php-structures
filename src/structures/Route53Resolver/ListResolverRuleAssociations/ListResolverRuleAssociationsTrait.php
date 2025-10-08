<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRuleAssociations;

trait ListResolverRuleAssociationsTrait
{
    /**
     * @param ListResolverRuleAssociationsRequest $args
     * @return ListResolverRuleAssociationsResponse
     */
    public function listResolverRuleAssociations(ListResolverRuleAssociationsRequest $args)
    {
        $result = parent::listResolverRuleAssociations($args->toArray());
        return new ListResolverRuleAssociationsResponse($result->toArray());
    }
}
