<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CryptoConfig|null $CryptoConfig
 * @property 'REAL'|'TEST'|null $CurrencyMode
 */
class MonetizationConfig extends Shape
{
    /**
     * @param array{
     *     CryptoConfig?: CryptoConfig|null,
     *     CurrencyMode?: 'REAL'|'TEST'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
