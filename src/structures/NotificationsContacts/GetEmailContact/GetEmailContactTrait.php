<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\GetEmailContact;

trait GetEmailContactTrait
{
    /**
     * @param GetEmailContactRequest $args
     * @return GetEmailContactResponse
     */
    public function getEmailContact(GetEmailContactRequest $args)
    {
        $result = parent::getEmailContact($args->toArray());
        return new GetEmailContactResponse($result->toArray());
    }
}
