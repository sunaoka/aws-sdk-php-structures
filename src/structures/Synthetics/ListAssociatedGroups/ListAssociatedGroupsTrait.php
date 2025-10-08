<?php

namespace Sunaoka\Aws\Structures\Synthetics\ListAssociatedGroups;

trait ListAssociatedGroupsTrait
{
    /**
     * @param ListAssociatedGroupsRequest $args
     * @return ListAssociatedGroupsResponse
     */
    public function listAssociatedGroups(ListAssociatedGroupsRequest $args)
    {
        $result = parent::listAssociatedGroups($args->toArray());
        return new ListAssociatedGroupsResponse($result->toArray());
    }
}
