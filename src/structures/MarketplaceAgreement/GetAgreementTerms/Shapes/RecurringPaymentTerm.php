<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $billingPeriod
 * @property string|null $currencyCode
 * @property string|null $price
 * @property string|null $type
 */
class RecurringPaymentTerm extends Shape
{
    /**
     * @param array{
     *     billingPeriod?: string|null,
     *     currencyCode?: string|null,
     *     price?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
