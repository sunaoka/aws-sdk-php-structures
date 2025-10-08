<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetOutpostResolver;

trait GetOutpostResolverTrait
{
    /**
     * @param GetOutpostResolverRequest $args
     * @return GetOutpostResolverResponse
     */
    public function getOutpostResolver(GetOutpostResolverRequest $args)
    {
        $result = parent::getOutpostResolver($args->toArray());
        return new GetOutpostResolverResponse($result->toArray());
    }
}
