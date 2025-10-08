<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteContact;

trait DeleteContactTrait
{
    /**
     * @param DeleteContactRequest $args
     * @return DeleteContactResponse
     */
    public function deleteContact(DeleteContactRequest $args)
    {
        $result = parent::deleteContact($args->toArray());
        return new DeleteContactResponse($result->toArray());
    }
}
