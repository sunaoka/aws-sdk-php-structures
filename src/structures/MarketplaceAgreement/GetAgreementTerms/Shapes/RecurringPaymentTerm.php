<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $id
 * @property string|null $currencyCode
 * @property string|null $billingPeriod
 * @property string|null $price
 */
class RecurringPaymentTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     id?: string|null,
     *     currencyCode?: string|null,
     *     billingPeriod?: string|null,
     *     price?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
