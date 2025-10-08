<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailChannel;

trait UpdateEmailChannelTrait
{
    /**
     * @param UpdateEmailChannelRequest $args
     * @return UpdateEmailChannelResponse
     */
    public function updateEmailChannel(UpdateEmailChannelRequest $args)
    {
        $result = parent::updateEmailChannel($args->toArray());
        return new UpdateEmailChannelResponse($result->toArray());
    }
}
