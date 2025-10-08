<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverConfigs;

trait ListResolverConfigsTrait
{
    /**
     * @param ListResolverConfigsRequest $args
     * @return ListResolverConfigsResponse
     */
    public function listResolverConfigs(ListResolverConfigsRequest $args)
    {
        $result = parent::listResolverConfigs($args->toArray());
        return new ListResolverConfigsResponse($result->toArray());
    }
}
