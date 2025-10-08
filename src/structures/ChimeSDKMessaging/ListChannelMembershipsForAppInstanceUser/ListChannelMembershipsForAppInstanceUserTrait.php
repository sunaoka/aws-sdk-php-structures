<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMembershipsForAppInstanceUser;

trait ListChannelMembershipsForAppInstanceUserTrait
{
    /**
     * @param ListChannelMembershipsForAppInstanceUserRequest $args
     * @return ListChannelMembershipsForAppInstanceUserResponse
     */
    public function listChannelMembershipsForAppInstanceUser(ListChannelMembershipsForAppInstanceUserRequest $args)
    {
        $result = parent::listChannelMembershipsForAppInstanceUser($args->toArray());
        return new ListChannelMembershipsForAppInstanceUserResponse($result->toArray());
    }
}
