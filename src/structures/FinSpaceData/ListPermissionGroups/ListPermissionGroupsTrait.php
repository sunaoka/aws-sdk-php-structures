<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroups;

trait ListPermissionGroupsTrait
{
    /**
     * @param ListPermissionGroupsRequest $args
     * @return ListPermissionGroupsResponse
     */
    public function listPermissionGroups(ListPermissionGroupsRequest $args)
    {
        $result = parent::listPermissionGroups($args->toArray());
        return new ListPermissionGroupsResponse($result->toArray());
    }
}
