<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetContact;

trait GetContactTrait
{
    /**
     * @param GetContactRequest $args
     * @return GetContactResponse
     */
    public function getContact(GetContactRequest $args)
    {
        $result = parent::getContact($args->toArray());
        return new GetContactResponse($result->toArray());
    }
}
