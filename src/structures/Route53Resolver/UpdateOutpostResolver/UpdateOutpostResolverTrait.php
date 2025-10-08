<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateOutpostResolver;

trait UpdateOutpostResolverTrait
{
    /**
     * @param UpdateOutpostResolverRequest $args
     * @return UpdateOutpostResolverResponse
     */
    public function updateOutpostResolver(UpdateOutpostResolverRequest $args)
    {
        $result = parent::updateOutpostResolver($args->toArray());
        return new UpdateOutpostResolverResponse($result->toArray());
    }
}
