<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateContactWithAddressBook;

trait AssociateContactWithAddressBookTrait
{
    /**
     * @param AssociateContactWithAddressBookRequest $args
     * @return AssociateContactWithAddressBookResponse
     */
    public function associateContactWithAddressBook(AssociateContactWithAddressBookRequest $args)
    {
        $result = parent::associateContactWithAddressBook($args->toArray());
        return new AssociateContactWithAddressBookResponse($result->toArray());
    }
}
