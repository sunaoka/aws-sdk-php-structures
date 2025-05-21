<?php

namespace Sunaoka\Aws\Structures\MailManager\ListMembersOfAddressList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddressPrefix
 */
class AddressFilter extends Shape
{
    /**
     * @param array{AddressPrefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
