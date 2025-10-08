<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsModeratedByAppInstanceUser;

trait ListChannelsModeratedByAppInstanceUserTrait
{
    /**
     * @param ListChannelsModeratedByAppInstanceUserRequest $args
     * @return ListChannelsModeratedByAppInstanceUserResponse
     */
    public function listChannelsModeratedByAppInstanceUser(ListChannelsModeratedByAppInstanceUserRequest $args)
    {
        $result = parent::listChannelsModeratedByAppInstanceUser($args->toArray());
        return new ListChannelsModeratedByAppInstanceUserResponse($result->toArray());
    }
}
