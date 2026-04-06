<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteAddressBook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressBookArn
 */
class DeleteAddressBookRequest extends Request
{
    /**
     * @param array{AddressBookArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
