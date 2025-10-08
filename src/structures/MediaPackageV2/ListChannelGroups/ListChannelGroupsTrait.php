<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListChannelGroups;

trait ListChannelGroupsTrait
{
    /**
     * @param ListChannelGroupsRequest $args
     * @return ListChannelGroupsResponse
     */
    public function listChannelGroups(ListChannelGroupsRequest $args)
    {
        $result = parent::listChannelGroups($args->toArray());
        return new ListChannelGroupsResponse($result->toArray());
    }
}
