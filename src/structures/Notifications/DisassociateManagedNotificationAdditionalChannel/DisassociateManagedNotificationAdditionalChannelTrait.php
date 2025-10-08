<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateManagedNotificationAdditionalChannel;

trait DisassociateManagedNotificationAdditionalChannelTrait
{
    /**
     * @param DisassociateManagedNotificationAdditionalChannelRequest $args
     * @return DisassociateManagedNotificationAdditionalChannelResponse
     */
    public function disassociateManagedNotificationAdditionalChannel(DisassociateManagedNotificationAdditionalChannelRequest $args)
    {
        $result = parent::disassociateManagedNotificationAdditionalChannel($args->toArray());
        return new DisassociateManagedNotificationAdditionalChannelResponse($result->toArray());
    }
}
