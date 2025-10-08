<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups;

trait ListRunGroupsTrait
{
    /**
     * @param ListRunGroupsRequest $args
     * @return ListRunGroupsResponse
     */
    public function listRunGroups(ListRunGroupsRequest $args)
    {
        $result = parent::listRunGroups($args->toArray());
        return new ListRunGroupsResponse($result->toArray());
    }
}
