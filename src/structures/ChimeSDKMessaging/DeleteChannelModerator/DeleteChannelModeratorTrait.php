<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelModerator;

trait DeleteChannelModeratorTrait
{
    /**
     * @param DeleteChannelModeratorRequest $args
     * @return void
     */
    public function deleteChannelModerator(DeleteChannelModeratorRequest $args)
    {
        parent::deleteChannelModerator($args->toArray());
    }
}
