<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\ActivateEmailContact;

trait ActivateEmailContactTrait
{
    /**
     * @param ActivateEmailContactRequest $args
     * @return ActivateEmailContactResponse
     */
    public function activateEmailContact(ActivateEmailContactRequest $args)
    {
        $result = parent::activateEmailContact($args->toArray());
        return new ActivateEmailContactResponse($result->toArray());
    }
}
