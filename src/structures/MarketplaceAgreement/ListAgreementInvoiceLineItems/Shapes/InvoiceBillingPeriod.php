<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementInvoiceLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 12> $month
 * @property int<2023, 2050> $year
 */
class InvoiceBillingPeriod extends Shape
{
    /**
     * @param array{
     *     month: int<1, 12>,
     *     year: int<2023, 2050>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
