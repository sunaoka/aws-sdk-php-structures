<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensGroups;

trait ListStorageLensGroupsTrait
{
    /**
     * @param ListStorageLensGroupsRequest $args
     * @return ListStorageLensGroupsResponse
     */
    public function listStorageLensGroups(ListStorageLensGroupsRequest $args)
    {
        $result = parent::listStorageLensGroups($args->toArray());
        return new ListStorageLensGroupsResponse($result->toArray());
    }
}
