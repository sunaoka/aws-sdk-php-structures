<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelModerators;

trait ListChannelModeratorsTrait
{
    /**
     * @param ListChannelModeratorsRequest $args
     * @return ListChannelModeratorsResponse
     */
    public function listChannelModerators(ListChannelModeratorsRequest $args)
    {
        $result = parent::listChannelModerators($args->toArray());
        return new ListChannelModeratorsResponse($result->toArray());
    }
}
