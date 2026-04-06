<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateAddressBook;

trait UpdateAddressBookTrait
{
    /**
     * @param UpdateAddressBookRequest $args
     * @return UpdateAddressBookResponse
     */
    public function updateAddressBook(UpdateAddressBookRequest $args)
    {
        $result = parent::updateAddressBook($args->toArray());
        return new UpdateAddressBookResponse($result->toArray());
    }
}
