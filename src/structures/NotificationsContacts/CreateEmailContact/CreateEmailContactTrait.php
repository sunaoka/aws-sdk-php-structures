<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\CreateEmailContact;

trait CreateEmailContactTrait
{
    /**
     * @param CreateEmailContactRequest $args
     * @return CreateEmailContactResponse
     */
    public function createEmailContact(CreateEmailContactRequest $args)
    {
        $result = parent::createEmailContact($args->toArray());
        return new CreateEmailContactResponse($result->toArray());
    }
}
