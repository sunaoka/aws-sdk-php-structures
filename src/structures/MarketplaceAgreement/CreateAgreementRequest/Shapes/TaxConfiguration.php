<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $taxEstimation
 */
class TaxConfiguration extends Shape
{
    /**
     * @param array{taxEstimation?: 'DISABLED'|'ENABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
