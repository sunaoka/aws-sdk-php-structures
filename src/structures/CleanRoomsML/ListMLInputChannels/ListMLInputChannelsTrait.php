<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListMLInputChannels;

trait ListMLInputChannelsTrait
{
    /**
     * @param ListMLInputChannelsRequest $args
     * @return ListMLInputChannelsResponse
     */
    public function listMLInputChannels(ListMLInputChannelsRequest $args)
    {
        $result = parent::listMLInputChannels($args->toArray());
        return new ListMLInputChannelsResponse($result->toArray());
    }
}
