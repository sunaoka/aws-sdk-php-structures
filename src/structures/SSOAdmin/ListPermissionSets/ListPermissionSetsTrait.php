<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSets;

trait ListPermissionSetsTrait
{
    /**
     * @param ListPermissionSetsRequest $args
     * @return ListPermissionSetsResponse
     */
    public function listPermissionSets(ListPermissionSetsRequest $args)
    {
        $result = parent::listPermissionSets($args->toArray());
        return new ListPermissionSetsResponse($result->toArray());
    }
}
