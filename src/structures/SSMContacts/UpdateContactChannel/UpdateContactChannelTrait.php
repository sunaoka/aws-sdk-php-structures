<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContactChannel;

trait UpdateContactChannelTrait
{
    /**
     * @param UpdateContactChannelRequest $args
     * @return UpdateContactChannelResponse
     */
    public function updateContactChannel(UpdateContactChannelRequest $args)
    {
        $result = parent::updateContactChannel($args->toArray());
        return new UpdateContactChannelResponse($result->toArray());
    }
}
