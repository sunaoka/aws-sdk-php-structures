<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PublicIPv6Addresses
 * @property list<string>|null $PublicIPv4Addresses
 */
class AddressTranslations extends Shape
{
    /**
     * @param array{
     *     PublicIPv6Addresses?: list<string>|null,
     *     PublicIPv4Addresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
