<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateContactFromAddressBook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 * @property string $AddressBookArn
 */
class DisassociateContactFromAddressBookRequest extends Request
{
    /**
     * @param array{
     *     ContactArn: string,
     *     AddressBookArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
