<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannelPlacementGroup;

trait CreateChannelPlacementGroupTrait
{
    /**
     * @param CreateChannelPlacementGroupRequest $args
     * @return CreateChannelPlacementGroupResponse
     */
    public function createChannelPlacementGroup(CreateChannelPlacementGroupRequest $args)
    {
        $result = parent::createChannelPlacementGroup($args->toArray());
        return new CreateChannelPlacementGroupResponse($result->toArray());
    }
}
