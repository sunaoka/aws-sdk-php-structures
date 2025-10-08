<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateAdmChannel;

trait UpdateAdmChannelTrait
{
    /**
     * @param UpdateAdmChannelRequest $args
     * @return UpdateAdmChannelResponse
     */
    public function updateAdmChannel(UpdateAdmChannelRequest $args)
    {
        $result = parent::updateAdmChannel($args->toArray());
        return new UpdateAdmChannelResponse($result->toArray());
    }
}
