<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetAddressBook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddressBookArn
 * @property string|null $Name
 * @property string|null $Description
 */
class AddressBook extends Shape
{
    /**
     * @param array{
     *     AddressBookArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
