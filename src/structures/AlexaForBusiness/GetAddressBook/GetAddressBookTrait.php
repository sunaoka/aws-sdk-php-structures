<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetAddressBook;

trait GetAddressBookTrait
{
    /**
     * @param GetAddressBookRequest $args
     * @return GetAddressBookResponse
     */
    public function getAddressBook(GetAddressBookRequest $args)
    {
        $result = parent::getAddressBook($args->toArray());
        return new GetAddressBookResponse($result->toArray());
    }
}
