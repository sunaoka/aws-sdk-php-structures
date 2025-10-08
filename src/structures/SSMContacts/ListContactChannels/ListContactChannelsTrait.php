<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContactChannels;

trait ListContactChannelsTrait
{
    /**
     * @param ListContactChannelsRequest $args
     * @return ListContactChannelsResponse
     */
    public function listContactChannels(ListContactChannelsRequest $args)
    {
        $result = parent::listContactChannels($args->toArray());
        return new ListContactChannelsResponse($result->toArray());
    }
}
