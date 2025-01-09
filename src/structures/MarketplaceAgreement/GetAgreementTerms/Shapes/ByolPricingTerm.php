<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 */
class ByolPricingTerm extends Shape
{
    /**
     * @param array{type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
