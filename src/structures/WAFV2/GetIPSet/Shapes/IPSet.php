<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetIPSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $ARN
 * @property string|null $Description
 * @property 'IPV4'|'IPV6' $IPAddressVersion
 * @property list<string> $Addresses
 */
class IPSet extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     ARN: string,
     *     Description?: string|null,
     *     IPAddressVersion: 'IPV4'|'IPV6',
     *     Addresses: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
