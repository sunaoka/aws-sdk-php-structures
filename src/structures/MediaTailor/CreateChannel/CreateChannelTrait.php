<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateChannel;

trait CreateChannelTrait
{
    /**
     * @param CreateChannelRequest $args
     * @return CreateChannelResponse
     */
    public function createChannel(CreateChannelRequest $args)
    {
        $result = parent::createChannel($args->toArray());
        return new CreateChannelResponse($result->toArray());
    }
}
