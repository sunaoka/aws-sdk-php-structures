<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateGlobalResolver;

trait UpdateGlobalResolverTrait
{
    /**
     * @param UpdateGlobalResolverRequest $args
     * @return UpdateGlobalResolverResponse
     */
    public function updateGlobalResolver(UpdateGlobalResolverRequest $args)
    {
        $result = parent::updateGlobalResolver($args->toArray());
        return new UpdateGlobalResolverResponse($result->toArray());
    }
}
