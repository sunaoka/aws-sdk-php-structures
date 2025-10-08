<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\DeleteChannelGroup;

trait DeleteChannelGroupTrait
{
    /**
     * @param DeleteChannelGroupRequest $args
     * @return DeleteChannelGroupResponse
     */
    public function deleteChannelGroup(DeleteChannelGroupRequest $args)
    {
        $result = parent::deleteChannelGroup($args->toArray());
        return new DeleteChannelGroupResponse($result->toArray());
    }
}
