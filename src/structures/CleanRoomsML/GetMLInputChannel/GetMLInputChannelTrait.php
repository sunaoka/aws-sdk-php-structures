<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel;

trait GetMLInputChannelTrait
{
    /**
     * @param GetMLInputChannelRequest $args
     * @return GetMLInputChannelResponse
     */
    public function getMLInputChannel(GetMLInputChannelRequest $args)
    {
        $result = parent::getMLInputChannel($args->toArray());
        return new GetMLInputChannelResponse($result->toArray());
    }
}
