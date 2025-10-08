<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelPlacementGroup;

trait UpdateChannelPlacementGroupTrait
{
    /**
     * @param UpdateChannelPlacementGroupRequest $args
     * @return UpdateChannelPlacementGroupResponse
     */
    public function updateChannelPlacementGroup(UpdateChannelPlacementGroupRequest $args)
    {
        $result = parent::updateChannelPlacementGroup($args->toArray());
        return new UpdateChannelPlacementGroupResponse($result->toArray());
    }
}
