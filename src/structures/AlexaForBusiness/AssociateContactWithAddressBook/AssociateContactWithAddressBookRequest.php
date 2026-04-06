<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateContactWithAddressBook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 * @property string $AddressBookArn
 */
class AssociateContactWithAddressBookRequest extends Request
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
