<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionKey
 * @property int $maxQuantity
 */
class GrantItem extends Shape
{
    /**
     * @param array{
     *     dimensionKey?: string,
     *     maxQuantity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
