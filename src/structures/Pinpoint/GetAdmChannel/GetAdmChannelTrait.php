<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetAdmChannel;

trait GetAdmChannelTrait
{
    /**
     * @param GetAdmChannelRequest $args
     * @return GetAdmChannelResponse
     */
    public function getAdmChannel(GetAdmChannelRequest $args)
    {
        $result = parent::getAdmChannel($args->toArray());
        return new GetAdmChannelResponse($result->toArray());
    }
}
