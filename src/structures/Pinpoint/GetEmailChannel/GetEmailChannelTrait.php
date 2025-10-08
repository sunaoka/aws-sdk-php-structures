<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEmailChannel;

trait GetEmailChannelTrait
{
    /**
     * @param GetEmailChannelRequest $args
     * @return GetEmailChannelResponse
     */
    public function getEmailChannel(GetEmailChannelRequest $args)
    {
        $result = parent::getEmailChannel($args->toArray());
        return new GetEmailChannelResponse($result->toArray());
    }
}
