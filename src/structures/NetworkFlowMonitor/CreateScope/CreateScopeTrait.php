<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateScope;

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
