<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelModerator;

trait CreateChannelModeratorTrait
{
    /**
     * @param CreateChannelModeratorRequest $args
     * @return CreateChannelModeratorResponse
     */
    public function createChannelModerator(CreateChannelModeratorRequest $args)
    {
        $result = parent::createChannelModerator($args->toArray());
        return new CreateChannelModeratorResponse($result->toArray());
    }
}
