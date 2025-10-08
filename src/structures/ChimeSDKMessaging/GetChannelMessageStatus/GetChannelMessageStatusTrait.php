<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMessageStatus;

trait GetChannelMessageStatusTrait
{
    /**
     * @param GetChannelMessageStatusRequest $args
     * @return GetChannelMessageStatusResponse
     */
    public function getChannelMessageStatus(GetChannelMessageStatusRequest $args)
    {
        $result = parent::getChannelMessageStatus($args->toArray());
        return new GetChannelMessageStatusResponse($result->toArray());
    }
}
