<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannelPlacementGroups;

trait ListChannelPlacementGroupsTrait
{
    /**
     * @param ListChannelPlacementGroupsRequest $args
     * @return ListChannelPlacementGroupsResponse
     */
    public function listChannelPlacementGroups(ListChannelPlacementGroupsRequest $args)
    {
        $result = parent::listChannelPlacementGroups($args->toArray());
        return new ListChannelPlacementGroupsResponse($result->toArray());
    }
}
