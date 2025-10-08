<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationMLInputChannels;

trait ListCollaborationMLInputChannelsTrait
{
    /**
     * @param ListCollaborationMLInputChannelsRequest $args
     * @return ListCollaborationMLInputChannelsResponse
     */
    public function listCollaborationMLInputChannels(ListCollaborationMLInputChannelsRequest $args)
    {
        $result = parent::listCollaborationMLInputChannels($args->toArray());
        return new ListCollaborationMLInputChannelsResponse($result->toArray());
    }
}
