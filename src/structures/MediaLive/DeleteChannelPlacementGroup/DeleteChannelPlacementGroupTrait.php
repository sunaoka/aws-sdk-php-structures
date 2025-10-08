<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannelPlacementGroup;

trait DeleteChannelPlacementGroupTrait
{
    /**
     * @param DeleteChannelPlacementGroupRequest $args
     * @return DeleteChannelPlacementGroupResponse
     */
    public function deleteChannelPlacementGroup(DeleteChannelPlacementGroupRequest $args)
    {
        $result = parent::deleteChannelPlacementGroup($args->toArray());
        return new DeleteChannelPlacementGroupResponse($result->toArray());
    }
}
