<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECIPIENT' $Attribute
 * @property list<string> $AddressLists
 */
class IngressIsInAddressList extends Shape
{
    /**
     * @param array{
     *     Attribute: 'RECIPIENT',
     *     AddressLists: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
