<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeactivateContactChannel;

trait DeactivateContactChannelTrait
{
    /**
     * @param DeactivateContactChannelRequest $args
     * @return DeactivateContactChannelResponse
     */
    public function deactivateContactChannel(DeactivateContactChannelRequest $args)
    {
        $result = parent::deactivateContactChannel($args->toArray());
        return new DeactivateContactChannelResponse($result->toArray());
    }
}
