<?php

namespace Sunaoka\Aws\Structures\Payments\GetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invoiceId
 * @property 'DUE'|'PAST_DUE'|null $dueStatus
 * @property BillingPeriod $billingPeriod
 * @property \Aws\Api\DateTimeResult $dueDate
 * @property string|null $paymentTerms
 * @property 'ONE_TIME'|'RECURRING' $invoiceFrequency
 */
class InvoiceDetails extends Shape
{
    /**
     * @param array{
     *     invoiceId: string,
     *     dueStatus?: 'DUE'|'PAST_DUE'|null,
     *     billingPeriod: BillingPeriod,
     *     dueDate: \Aws\Api\DateTimeResult,
     *     paymentTerms?: string|null,
     *     invoiceFrequency: 'ONE_TIME'|'RECURRING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
