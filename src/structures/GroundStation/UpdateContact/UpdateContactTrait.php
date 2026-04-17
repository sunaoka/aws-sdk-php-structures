<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateContact;

trait UpdateContactTrait
{
    /**
     * @param UpdateContactRequest $args
     * @return UpdateContactResponse
     */
    public function updateContact(UpdateContactRequest $args)
    {
        $result = parent::updateContact($args->toArray());
        return new UpdateContactResponse($result->toArray());
    }
}
