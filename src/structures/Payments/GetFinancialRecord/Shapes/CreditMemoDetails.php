<?php

namespace Sunaoka\Aws\Structures\Payments\GetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invoiceId
 * @property BillingPeriod $billingPeriod
 */
class CreditMemoDetails extends Shape
{
    /**
     * @param array{
     *     invoiceId: string,
     *     billingPeriod: BillingPeriod
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
