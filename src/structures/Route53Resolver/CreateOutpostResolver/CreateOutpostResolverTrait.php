<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateOutpostResolver;

trait CreateOutpostResolverTrait
{
    /**
     * @param CreateOutpostResolverRequest $args
     * @return CreateOutpostResolverResponse
     */
    public function createOutpostResolver(CreateOutpostResolverRequest $args)
    {
        $result = parent::createOutpostResolver($args->toArray());
        return new CreateOutpostResolverResponse($result->toArray());
    }
}
