<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetAddressBook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressBookArn
 */
class GetAddressBookRequest extends Request
{
    /**
     * @param array{AddressBookArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
