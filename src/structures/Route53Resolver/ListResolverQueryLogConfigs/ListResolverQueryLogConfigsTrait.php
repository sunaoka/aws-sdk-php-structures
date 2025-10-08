<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverQueryLogConfigs;

trait ListResolverQueryLogConfigsTrait
{
    /**
     * @param ListResolverQueryLogConfigsRequest $args
     * @return ListResolverQueryLogConfigsResponse
     */
    public function listResolverQueryLogConfigs(ListResolverQueryLogConfigsRequest $args)
    {
        $result = parent::listResolverQueryLogConfigs($args->toArray());
        return new ListResolverQueryLogConfigsResponse($result->toArray());
    }
}
