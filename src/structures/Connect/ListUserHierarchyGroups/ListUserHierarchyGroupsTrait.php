<?php

namespace Sunaoka\Aws\Structures\Connect\ListUserHierarchyGroups;

trait ListUserHierarchyGroupsTrait
{
    /**
     * @param ListUserHierarchyGroupsRequest $args
     * @return ListUserHierarchyGroupsResponse
     */
    public function listUserHierarchyGroups(ListUserHierarchyGroupsRequest $args)
    {
        $result = parent::listUserHierarchyGroups($args->toArray());
        return new ListUserHierarchyGroupsResponse($result->toArray());
    }
}
