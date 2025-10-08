<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroups;

trait ListGroupsTrait
{
    /**
     * @param ListGroupsRequest $args
     * @return ListGroupsResponse
     */
    public function listGroups(ListGroupsRequest $args)
    {
        $result = parent::listGroups($args->toArray());
        return new ListGroupsResponse($result->toArray());
    }
}
