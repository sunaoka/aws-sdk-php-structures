<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteChannel;

trait DeleteChannelTrait
{
    /**
     * @param DeleteChannelRequest $args
     * @return void
     */
    public function deleteChannel(DeleteChannelRequest $args)
    {
        parent::deleteChannel($args->toArray());
    }
}
