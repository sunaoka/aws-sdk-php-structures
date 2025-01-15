<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRateBasedStatementManagedKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'IPV6'|null $IPAddressVersion
 * @property list<string>|null $Addresses
 */
class RateBasedStatementManagedKeysIPSet extends Shape
{
    /**
     * @param array{
     *     IPAddressVersion?: 'IPV4'|'IPV6'|null,
     *     Addresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
