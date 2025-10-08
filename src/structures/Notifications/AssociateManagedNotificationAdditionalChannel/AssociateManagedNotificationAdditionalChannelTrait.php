<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateManagedNotificationAdditionalChannel;

trait AssociateManagedNotificationAdditionalChannelTrait
{
    /**
     * @param AssociateManagedNotificationAdditionalChannelRequest $args
     * @return AssociateManagedNotificationAdditionalChannelResponse
     */
    public function associateManagedNotificationAdditionalChannel(
        AssociateManagedNotificationAdditionalChannelRequest $args,
    ) {
        $result = parent::associateManagedNotificationAdditionalChannel($args->toArray());
        return new AssociateManagedNotificationAdditionalChannelResponse($result->toArray());
    }
}
