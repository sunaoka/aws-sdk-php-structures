<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUserGroups;

trait ListUserGroupsTrait
{
    /**
     * @param ListUserGroupsRequest $args
     * @return ListUserGroupsResponse
     */
    public function listUserGroups(ListUserGroupsRequest $args)
    {
        $result = parent::listUserGroups($args->toArray());
        return new ListUserGroupsResponse($result->toArray());
    }
}
