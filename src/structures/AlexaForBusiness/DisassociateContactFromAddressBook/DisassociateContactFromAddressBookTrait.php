<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateContactFromAddressBook;

trait DisassociateContactFromAddressBookTrait
{
    /**
     * @param DisassociateContactFromAddressBookRequest $args
     * @return DisassociateContactFromAddressBookResponse
     */
    public function disassociateContactFromAddressBook(DisassociateContactFromAddressBookRequest $args)
    {
        $result = parent::disassociateContactFromAddressBook($args->toArray());
        return new DisassociateContactFromAddressBookResponse($result->toArray());
    }
}
