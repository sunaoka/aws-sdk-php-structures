<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetServicesInScope;

trait GetServicesInScopeTrait
{
    /**
     * @param GetServicesInScopeRequest $args
     * @return GetServicesInScopeResponse
     */
    public function getServicesInScope(GetServicesInScopeRequest $args)
    {
        $result = parent::getServicesInScope($args->toArray());
        return new GetServicesInScopeResponse($result->toArray());
    }
}
