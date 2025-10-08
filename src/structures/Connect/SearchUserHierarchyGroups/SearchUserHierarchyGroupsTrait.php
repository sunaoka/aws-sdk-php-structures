<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups;

trait SearchUserHierarchyGroupsTrait
{
    /**
     * @param SearchUserHierarchyGroupsRequest $args
     * @return SearchUserHierarchyGroupsResponse
     */
    public function searchUserHierarchyGroups(SearchUserHierarchyGroupsRequest $args)
    {
        $result = parent::searchUserHierarchyGroups($args->toArray());
        return new SearchUserHierarchyGroupsResponse($result->toArray());
    }
}
