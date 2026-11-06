<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CryptoConfig|null $CryptoConfig
 * @property list<ConnectedAccountConfig>|null $ConnectedAccountConfigs
 * @property 'REAL'|'TEST'|null $CurrencyMode
 */
class MonetizationConfig extends Shape
{
    /**
     * @param array{
     *     CryptoConfig?: CryptoConfig|null,
     *     ConnectedAccountConfigs?: list<ConnectedAccountConfig>|null,
     *     CurrencyMode?: 'REAL'|'TEST'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
