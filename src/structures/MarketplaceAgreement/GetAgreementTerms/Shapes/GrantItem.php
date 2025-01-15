<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dimensionKey
 * @property int<1, max>|null $maxQuantity
 */
class GrantItem extends Shape
{
    /**
     * @param array{
     *     dimensionKey?: string|null,
     *     maxQuantity?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
