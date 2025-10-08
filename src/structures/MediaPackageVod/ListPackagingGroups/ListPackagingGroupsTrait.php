<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingGroups;

trait ListPackagingGroupsTrait
{
    /**
     * @param ListPackagingGroupsRequest $args
     * @return ListPackagingGroupsResponse
     */
    public function listPackagingGroups(ListPackagingGroupsRequest $args)
    {
        $result = parent::listPackagingGroups($args->toArray());
        return new ListPackagingGroupsResponse($result->toArray());
    }
}
