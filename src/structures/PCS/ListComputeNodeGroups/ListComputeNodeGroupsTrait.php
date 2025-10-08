<?php

namespace Sunaoka\Aws\Structures\PCS\ListComputeNodeGroups;

trait ListComputeNodeGroupsTrait
{
    /**
     * @param ListComputeNodeGroupsRequest $args
     * @return ListComputeNodeGroupsResponse
     */
    public function listComputeNodeGroups(ListComputeNodeGroupsRequest $args)
    {
        $result = parent::listComputeNodeGroups($args->toArray());
        return new ListComputeNodeGroupsResponse($result->toArray());
    }
}
