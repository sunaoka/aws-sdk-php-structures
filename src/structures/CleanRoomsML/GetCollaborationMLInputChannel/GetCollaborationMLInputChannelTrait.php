<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel;

trait GetCollaborationMLInputChannelTrait
{
    /**
     * @param GetCollaborationMLInputChannelRequest $args
     * @return GetCollaborationMLInputChannelResponse
     */
    public function getCollaborationMLInputChannel(GetCollaborationMLInputChannelRequest $args)
    {
        $result = parent::getCollaborationMLInputChannel($args->toArray());
        return new GetCollaborationMLInputChannelResponse($result->toArray());
    }
}
