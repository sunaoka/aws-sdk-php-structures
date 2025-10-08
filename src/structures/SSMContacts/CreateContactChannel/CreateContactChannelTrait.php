<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContactChannel;

trait CreateContactChannelTrait
{
    /**
     * @param CreateContactChannelRequest $args
     * @return CreateContactChannelResponse
     */
    public function createContactChannel(CreateContactChannelRequest $args)
    {
        $result = parent::createContactChannel($args->toArray());
        return new CreateContactChannelResponse($result->toArray());
    }
}
