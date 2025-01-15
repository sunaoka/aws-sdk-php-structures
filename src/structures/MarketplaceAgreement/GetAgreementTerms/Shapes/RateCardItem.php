<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dimensionKey
 * @property string|null $price
 */
class RateCardItem extends Shape
{
    /**
     * @param array{
     *     dimensionKey?: string|null,
     *     price?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
