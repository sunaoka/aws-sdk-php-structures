<?php

namespace Sunaoka\Aws\Structures\Connect\DismissUserContact;

trait DismissUserContactTrait
{
    /**
     * @param DismissUserContactRequest $args
     * @return DismissUserContactResponse
     */
    public function dismissUserContact(DismissUserContactRequest $args)
    {
        $result = parent::dismissUserContact($args->toArray());
        return new DismissUserContactResponse($result->toArray());
    }
}
