<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverQueryLogConfigAssociations;

trait ListResolverQueryLogConfigAssociationsTrait
{
    /**
     * @param ListResolverQueryLogConfigAssociationsRequest $args
     * @return ListResolverQueryLogConfigAssociationsResponse
     */
    public function listResolverQueryLogConfigAssociations(ListResolverQueryLogConfigAssociationsRequest $args)
    {
        $result = parent::listResolverQueryLogConfigAssociations($args->toArray());
        return new ListResolverQueryLogConfigAssociationsResponse($result->toArray());
    }
}
