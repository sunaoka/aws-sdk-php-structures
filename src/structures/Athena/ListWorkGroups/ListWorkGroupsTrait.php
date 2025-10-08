<?php

namespace Sunaoka\Aws\Structures\Athena\ListWorkGroups;

trait ListWorkGroupsTrait
{
    /**
     * @param ListWorkGroupsRequest $args
     * @return ListWorkGroupsResponse
     */
    public function listWorkGroups(ListWorkGroupsRequest $args)
    {
        $result = parent::listWorkGroups($args->toArray());
        return new ListWorkGroupsResponse($result->toArray());
    }
}
