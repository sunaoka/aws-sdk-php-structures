<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverConfig;

trait UpdateResolverConfigTrait
{
    /**
     * @param UpdateResolverConfigRequest $args
     * @return UpdateResolverConfigResponse
     */
    public function updateResolverConfig(UpdateResolverConfigRequest $args)
    {
        $result = parent::updateResolverConfig($args->toArray());
        return new UpdateResolverConfigResponse($result->toArray());
    }
}
