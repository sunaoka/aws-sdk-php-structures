<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverConfig;

trait GetResolverConfigTrait
{
    /**
     * @param GetResolverConfigRequest $args
     * @return GetResolverConfigResponse
     */
    public function getResolverConfig(GetResolverConfigRequest $args)
    {
        $result = parent::getResolverConfig($args->toArray());
        return new GetResolverConfigResponse($result->toArray());
    }
}
