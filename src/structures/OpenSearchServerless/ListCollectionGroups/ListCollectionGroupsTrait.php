<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollectionGroups;

trait ListCollectionGroupsTrait
{
    /**
     * @param ListCollectionGroupsRequest $args
     * @return ListCollectionGroupsResponse
     */
    public function listCollectionGroups(ListCollectionGroupsRequest $args)
    {
        $result = parent::listCollectionGroups($args->toArray());
        return new ListCollectionGroupsResponse($result->toArray());
    }
}
