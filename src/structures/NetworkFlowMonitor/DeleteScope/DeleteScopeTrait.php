<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\DeleteScope;

trait DeleteScopeTrait
{
    /**
     * @param DeleteScopeRequest $args
     * @return DeleteScopeResponse
     */
    public function deleteScope(DeleteScopeRequest $args)
    {
        $result = parent::deleteScope($args->toArray());
        return new DeleteScopeResponse($result->toArray());
    }
}
