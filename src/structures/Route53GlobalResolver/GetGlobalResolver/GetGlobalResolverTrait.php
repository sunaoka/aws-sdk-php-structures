<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetGlobalResolver;

trait GetGlobalResolverTrait
{
    /**
     * @param GetGlobalResolverRequest $args
     * @return GetGlobalResolverResponse
     */
    public function getGlobalResolver(GetGlobalResolverRequest $args)
    {
        $result = parent::getGlobalResolver($args->toArray());
        return new GetGlobalResolverResponse($result->toArray());
    }
}
