<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel;

trait CreateMLInputChannelTrait
{
    /**
     * @param CreateMLInputChannelRequest $args
     * @return CreateMLInputChannelResponse
     */
    public function createMLInputChannel(CreateMLInputChannelRequest $args)
    {
        $result = parent::createMLInputChannel($args->toArray());
        return new CreateMLInputChannelResponse($result->toArray());
    }
}
