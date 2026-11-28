<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $price
 */
class RegionalPrice extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     price: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
