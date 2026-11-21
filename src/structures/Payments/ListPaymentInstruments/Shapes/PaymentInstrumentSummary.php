<?php

namespace Sunaoka\Aws\Structures\Payments\ListPaymentInstruments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property 'CARD'|'US_ACH_BANK_ACCOUNT'|'SEPA_BANK_ACCOUNT'|'UK_BACS_BANK_ACCOUNT'|'IN_NET_BANKING'|'CN_BANK_REDIRECT'|'UPI'|'PIX'|'PAY_BY_INVOICE' $paymentMethod
 * @property 'ACTIVE'|'PENDING_SETUP'|'SETUP_IN_PROGRESS'|'INVALID' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PaymentInstrumentSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     paymentMethod: 'CARD'|'US_ACH_BANK_ACCOUNT'|'SEPA_BANK_ACCOUNT'|'UK_BACS_BANK_ACCOUNT'|'IN_NET_BANKING'|'CN_BANK_REDIRECT'|'UPI'|'PIX'|'PAY_BY_INVOICE',
     *     status: 'ACTIVE'|'PENDING_SETUP'|'SETUP_IN_PROGRESS'|'INVALID',
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
