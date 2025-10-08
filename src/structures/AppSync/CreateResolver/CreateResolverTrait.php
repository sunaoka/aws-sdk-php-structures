<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver;

trait CreateResolverTrait
{
    /**
     * @param CreateResolverRequest $args
     * @return CreateResolverResponse
     */
    public function createResolver(CreateResolverRequest $args)
    {
        $result = parent::createResolver($args->toArray());
        return new CreateResolverResponse($result->toArray());
    }
}
