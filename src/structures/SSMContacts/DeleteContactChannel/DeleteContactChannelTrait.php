<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteContactChannel;

trait DeleteContactChannelTrait
{
    /**
     * @param DeleteContactChannelRequest $args
     * @return DeleteContactChannelResponse
     */
    public function deleteContactChannel(DeleteContactChannelRequest $args)
    {
        $result = parent::deleteContactChannel($args->toArray());
        return new DeleteContactChannelResponse($result->toArray());
    }
}
