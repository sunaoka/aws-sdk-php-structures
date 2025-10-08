<?php

namespace Sunaoka\Aws\Structures\AppSync\GetResolver;

trait GetResolverTrait
{
    /**
     * @param GetResolverRequest $args
     * @return GetResolverResponse
     */
    public function getResolver(GetResolverRequest $args)
    {
        $result = parent::getResolver($args->toArray());
        return new GetResolverResponse($result->toArray());
    }
}
