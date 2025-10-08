<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateResolver;

trait UpdateResolverTrait
{
    /**
     * @param UpdateResolverRequest $args
     * @return UpdateResolverResponse
     */
    public function updateResolver(UpdateResolverRequest $args)
    {
        $result = parent::updateResolver($args->toArray());
        return new UpdateResolverResponse($result->toArray());
    }
}
