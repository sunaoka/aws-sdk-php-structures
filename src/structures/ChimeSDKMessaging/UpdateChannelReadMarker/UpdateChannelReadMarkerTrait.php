<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelReadMarker;

trait UpdateChannelReadMarkerTrait
{
    /**
     * @param UpdateChannelReadMarkerRequest $args
     * @return UpdateChannelReadMarkerResponse
     */
    public function updateChannelReadMarker(UpdateChannelReadMarkerRequest $args)
    {
        $result = parent::updateChannelReadMarker($args->toArray());
        return new UpdateChannelReadMarkerResponse($result->toArray());
    }
}
