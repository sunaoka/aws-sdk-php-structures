<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRateBasedStatementManagedKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'IPV6' $IPAddressVersion
 * @property list<string> $Addresses
 */
class RateBasedStatementManagedKeysIPSet extends Shape
{
    /**
     * @param array{
     *     IPAddressVersion?: 'IPV4'|'IPV6',
     *     Addresses?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
