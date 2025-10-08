<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateManagedNotificationAccountContact;

trait AssociateManagedNotificationAccountContactTrait
{
    /**
     * @param AssociateManagedNotificationAccountContactRequest $args
     * @return AssociateManagedNotificationAccountContactResponse
     */
    public function associateManagedNotificationAccountContact(
        AssociateManagedNotificationAccountContactRequest $args,
    ) {
        $result = parent::associateManagedNotificationAccountContact($args->toArray());
        return new AssociateManagedNotificationAccountContactResponse($result->toArray());
    }
}
