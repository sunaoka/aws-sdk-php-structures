<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateAddressBook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressBookArn
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateAddressBookRequest extends Request
{
    /**
     * @param array{
     *     AddressBookArn: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
