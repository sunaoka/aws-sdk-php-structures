<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateManagedNotificationAccountContact;

trait DisassociateManagedNotificationAccountContactTrait
{
    /**
     * @param DisassociateManagedNotificationAccountContactRequest $args
     * @return DisassociateManagedNotificationAccountContactResponse
     */
    public function disassociateManagedNotificationAccountContact(DisassociateManagedNotificationAccountContactRequest $args)
    {
        $result = parent::disassociateManagedNotificationAccountContact($args->toArray());
        return new DisassociateManagedNotificationAccountContactResponse($result->toArray());
    }
}
