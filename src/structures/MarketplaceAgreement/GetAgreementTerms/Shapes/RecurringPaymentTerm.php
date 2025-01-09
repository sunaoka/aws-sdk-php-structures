<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $billingPeriod
 * @property string $currencyCode
 * @property string $price
 * @property string $type
 */
class RecurringPaymentTerm extends Shape
{
    /**
     * @param array{
     *     billingPeriod?: string,
     *     currencyCode?: string,
     *     price?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
