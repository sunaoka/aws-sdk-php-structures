<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currencyCode
 * @property string|null $newAgreementValue
 * @property string|null $newAgreementValueAfterTax
 * @property list<ExpectedCharge>|null $expectedCharges
 * @property EstimatedTaxes|null $estimatedTaxes
 * @property list<ItemizedCharge>|null $itemizedCharges
 * @property InvoicingEntity|null $invoicingEntity
 */
class ChargeSummary extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string|null,
     *     newAgreementValue?: string|null,
     *     newAgreementValueAfterTax?: string|null,
     *     expectedCharges?: list<ExpectedCharge>|null,
     *     estimatedTaxes?: EstimatedTaxes|null,
     *     itemizedCharges?: list<ItemizedCharge>|null,
     *     invoicingEntity?: InvoicingEntity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
