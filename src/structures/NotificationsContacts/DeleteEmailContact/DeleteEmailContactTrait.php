<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\DeleteEmailContact;

trait DeleteEmailContactTrait
{
    /**
     * @param DeleteEmailContactRequest $args
     * @return DeleteEmailContactResponse
     */
    public function deleteEmailContact(DeleteEmailContactRequest $args)
    {
        $result = parent::deleteEmailContact($args->toArray());
        return new DeleteEmailContactResponse($result->toArray());
    }
}
