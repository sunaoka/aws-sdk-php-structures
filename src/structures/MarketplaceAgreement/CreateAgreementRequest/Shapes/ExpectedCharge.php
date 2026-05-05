<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $time
 * @property string|null $amount
 * @property string|null $amountAfterTax
 * @property 'ON_ACCEPTANCE'|'SCHEDULED'|'BILLING_PERIOD'|null $timing
 * @property EstimatedTaxes|null $estimatedTaxes
 */
class ExpectedCharge extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     time?: \Aws\Api\DateTimeResult|null,
     *     amount?: string|null,
     *     amountAfterTax?: string|null,
     *     timing?: 'ON_ACCEPTANCE'|'SCHEDULED'|'BILLING_PERIOD'|null,
     *     estimatedTaxes?: EstimatedTaxes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
