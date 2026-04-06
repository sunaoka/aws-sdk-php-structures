<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAccessScopes;

trait ListApplicationAccessScopesTrait
{
    /**
     * @param ListApplicationAccessScopesRequest $args
     * @return ListApplicationAccessScopesResponse
     */
    public function listApplicationAccessScopes(ListApplicationAccessScopesRequest $args)
    {
        $result = parent::listApplicationAccessScopes($args->toArray());
        return new ListApplicationAccessScopesResponse($result->toArray());
    }
}
