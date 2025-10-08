<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannel;

trait GetChannelTrait
{
    /**
     * @param GetChannelRequest $args
     * @return GetChannelResponse
     */
    public function getChannel(GetChannelRequest $args)
    {
        $result = parent::getChannel($args->toArray());
        return new GetChannelResponse($result->toArray());
    }
}
