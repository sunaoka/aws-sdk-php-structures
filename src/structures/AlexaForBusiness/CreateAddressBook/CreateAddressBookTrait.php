<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateAddressBook;

trait CreateAddressBookTrait
{
    /**
     * @param CreateAddressBookRequest $args
     * @return CreateAddressBookResponse
     */
    public function createAddressBook(CreateAddressBookRequest $args)
    {
        $result = parent::createAddressBook($args->toArray());
        return new CreateAddressBookResponse($result->toArray());
    }
}
