<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListScopes;

trait ListScopesTrait
{
    /**
     * @param ListScopesRequest $args
     * @return ListScopesResponse
     */
    public function listScopes(ListScopesRequest $args)
    {
        $result = parent::listScopes($args->toArray());
        return new ListScopesResponse($result->toArray());
    }
}
