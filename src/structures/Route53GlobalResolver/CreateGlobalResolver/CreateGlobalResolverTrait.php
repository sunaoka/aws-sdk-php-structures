<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateGlobalResolver;

trait CreateGlobalResolverTrait
{
    /**
     * @param CreateGlobalResolverRequest $args
     * @return CreateGlobalResolverResponse
     */
    public function createGlobalResolver(CreateGlobalResolverRequest $args)
    {
        $result = parent::createGlobalResolver($args->toArray());
        return new CreateGlobalResolverResponse($result->toArray());
    }
}
