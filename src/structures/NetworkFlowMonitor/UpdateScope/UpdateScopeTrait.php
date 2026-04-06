<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateScope;

trait UpdateScopeTrait
{
    /**
     * @param UpdateScopeRequest $args
     * @return UpdateScopeResponse
     */
    public function updateScope(UpdateScopeRequest $args)
    {
        $result = parent::updateScope($args->toArray());
        return new UpdateScopeResponse($result->toArray());
    }
}
