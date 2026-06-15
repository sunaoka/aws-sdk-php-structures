<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PaymentNetwork> $PaymentNetworks
 */
class CryptoConfig extends Shape
{
    /**
     * @param array{PaymentNetworks: list<PaymentNetwork>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
