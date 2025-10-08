<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminScope;

trait GetAdminScopeTrait
{
    /**
     * @param GetAdminScopeRequest $args
     * @return GetAdminScopeResponse
     */
    public function getAdminScope(GetAdminScopeRequest $args)
    {
        $result = parent::getAdminScope($args->toArray());
        return new GetAdminScopeResponse($result->toArray());
    }
}
