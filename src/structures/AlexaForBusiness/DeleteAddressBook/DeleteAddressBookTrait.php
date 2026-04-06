<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteAddressBook;

trait DeleteAddressBookTrait
{
    /**
     * @param DeleteAddressBookRequest $args
     * @return DeleteAddressBookResponse
     */
    public function deleteAddressBook(DeleteAddressBookRequest $args)
    {
        $result = parent::deleteAddressBook($args->toArray());
        return new DeleteAddressBookResponse($result->toArray());
    }
}
