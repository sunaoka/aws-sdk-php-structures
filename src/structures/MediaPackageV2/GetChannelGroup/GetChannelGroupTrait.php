<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannelGroup;

trait GetChannelGroupTrait
{
    /**
     * @param GetChannelGroupRequest $args
     * @return GetChannelGroupResponse
     */
    public function getChannelGroup(GetChannelGroupRequest $args)
    {
        $result = parent::getChannelGroup($args->toArray());
        return new GetChannelGroupResponse($result->toArray());
    }
}
