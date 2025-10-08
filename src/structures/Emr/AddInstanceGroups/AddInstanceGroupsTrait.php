<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups;

trait AddInstanceGroupsTrait
{
    /**
     * @param AddInstanceGroupsRequest $args
     * @return AddInstanceGroupsResponse
     */
    public function addInstanceGroups(AddInstanceGroupsRequest $args)
    {
        $result = parent::addInstanceGroups($args->toArray());
        return new AddInstanceGroupsResponse($result->toArray());
    }
}
