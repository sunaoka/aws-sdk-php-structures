<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetScope;

trait GetScopeTrait
{
    /**
     * @param GetScopeRequest $args
     * @return GetScopeResponse
     */
    public function getScope(GetScopeRequest $args)
    {
        $result = parent::getScope($args->toArray());
        return new GetScopeResponse($result->toArray());
    }
}
