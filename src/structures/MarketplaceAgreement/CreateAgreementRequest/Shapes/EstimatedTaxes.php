<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaxBreakdownItem>|null $breakdown
 * @property string|null $totalAmount
 */
class EstimatedTaxes extends Shape
{
    /**
     * @param array{
     *     breakdown?: list<TaxBreakdownItem>|null,
     *     totalAmount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
