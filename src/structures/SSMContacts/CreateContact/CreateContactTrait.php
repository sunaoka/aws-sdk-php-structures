<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContact;

trait CreateContactTrait
{
    /**
     * @param CreateContactRequest $args
     * @return CreateContactResponse
     */
    public function createContact(CreateContactRequest $args)
    {
        $result = parent::createContact($args->toArray());
        return new CreateContactResponse($result->toArray());
    }
}
