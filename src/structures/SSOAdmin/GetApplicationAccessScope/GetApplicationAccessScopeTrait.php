<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAccessScope;

trait GetApplicationAccessScopeTrait
{
    /**
     * @param GetApplicationAccessScopeRequest $args
     * @return GetApplicationAccessScopeResponse
     */
    public function getApplicationAccessScope(GetApplicationAccessScopeRequest $args)
    {
        $result = parent::getApplicationAccessScope($args->toArray());
        return new GetApplicationAccessScopeResponse($result->toArray());
    }
}
