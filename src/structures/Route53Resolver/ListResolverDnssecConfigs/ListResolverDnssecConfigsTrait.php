<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverDnssecConfigs;

trait ListResolverDnssecConfigsTrait
{
    /**
     * @param ListResolverDnssecConfigsRequest $args
     * @return ListResolverDnssecConfigsResponse
     */
    public function listResolverDnssecConfigs(ListResolverDnssecConfigsRequest $args)
    {
        $result = parent::listResolverDnssecConfigs($args->toArray());
        return new ListResolverDnssecConfigsResponse($result->toArray());
    }
}
