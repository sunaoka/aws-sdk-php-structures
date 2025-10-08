<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelBan;

trait CreateChannelBanTrait
{
    /**
     * @param CreateChannelBanRequest $args
     * @return CreateChannelBanResponse
     */
    public function createChannelBan(CreateChannelBanRequest $args)
    {
        $result = parent::createChannelBan($args->toArray());
        return new CreateChannelBanResponse($result->toArray());
    }
}
