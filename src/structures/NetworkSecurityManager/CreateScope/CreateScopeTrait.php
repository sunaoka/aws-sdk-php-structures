<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScope;

trait CreateScopeTrait
{
    /**
     * @param CreateScopeRequest $args
     * @return CreateScopeResponse
     */
    public function createScope(CreateScopeRequest $args)
    {
        $result = parent::createScope($args->toArray());
        return new CreateScopeResponse($result->toArray());
    }
}
