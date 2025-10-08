<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups;

trait ListInstanceGroupsTrait
{
    /**
     * @param ListInstanceGroupsRequest $args
     * @return ListInstanceGroupsResponse
     */
    public function listInstanceGroups(ListInstanceGroupsRequest $args)
    {
        $result = parent::listInstanceGroups($args->toArray());
        return new ListInstanceGroupsResponse($result->toArray());
    }
}
