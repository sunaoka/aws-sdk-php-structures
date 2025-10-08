<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionalPriceRate> $rateCard
 */
class PricingTerm extends Shape
{
    /**
     * @param array{rateCard: list<DimensionalPriceRate>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
