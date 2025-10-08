<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannelGroup;

trait UpdateChannelGroupTrait
{
    /**
     * @param UpdateChannelGroupRequest $args
     * @return UpdateChannelGroupResponse
     */
    public function updateChannelGroup(UpdateChannelGroupRequest $args)
    {
        $result = parent::updateChannelGroup($args->toArray());
        return new UpdateChannelGroupResponse($result->toArray());
    }
}
