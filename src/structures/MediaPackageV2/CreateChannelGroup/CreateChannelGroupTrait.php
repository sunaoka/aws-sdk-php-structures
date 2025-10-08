<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannelGroup;

trait CreateChannelGroupTrait
{
    /**
     * @param CreateChannelGroupRequest $args
     * @return CreateChannelGroupResponse
     */
    public function createChannelGroup(CreateChannelGroupRequest $args)
    {
        $result = parent::createChannelGroup($args->toArray());
        return new CreateChannelGroupResponse($result->toArray());
    }
}
