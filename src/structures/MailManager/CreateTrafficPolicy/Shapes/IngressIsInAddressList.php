<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AddressLists
 * @property 'RECIPIENT' $Attribute
 */
class IngressIsInAddressList extends Shape
{
    /**
     * @param array{
     *     AddressLists: list<string>,
     *     Attribute: 'RECIPIENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
