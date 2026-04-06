<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteChannelMessage;

trait DeleteChannelMessageTrait
{
    /**
     * @param DeleteChannelMessageRequest $args
     * @return void
     */
    public function deleteChannelMessage(DeleteChannelMessageRequest $args)
    {
        parent::deleteChannelMessage($args->toArray());
    }
}
