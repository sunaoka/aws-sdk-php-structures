<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchGroups;

trait SearchGroupsTrait
{
    /**
     * @param SearchGroupsRequest $args
     * @return SearchGroupsResponse
     */
    public function searchGroups(SearchGroupsRequest $args)
    {
        $result = parent::searchGroups($args->toArray());
        return new SearchGroupsResponse($result->toArray());
    }
}
