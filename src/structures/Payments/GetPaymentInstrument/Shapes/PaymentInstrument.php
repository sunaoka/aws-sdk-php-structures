<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'CARD'|'US_ACH_BANK_ACCOUNT'|'SEPA_BANK_ACCOUNT'|'UK_BACS_BANK_ACCOUNT'|'IN_NET_BANKING'|'CN_BANK_REDIRECT'|'UPI'|'PIX'|'PAY_BY_INVOICE' $paymentMethod
 * @property 'ACTIVE'|'PENDING_SETUP'|'SETUP_IN_PROGRESS'|'INVALID' $status
 * @property PaymentInstrumentDetails|null $details
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PaymentInstrument extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     paymentMethod: 'CARD'|'US_ACH_BANK_ACCOUNT'|'SEPA_BANK_ACCOUNT'|'UK_BACS_BANK_ACCOUNT'|'IN_NET_BANKING'|'CN_BANK_REDIRECT'|'UPI'|'PIX'|'PAY_BY_INVOICE',
     *     status: 'ACTIVE'|'PENDING_SETUP'|'SETUP_IN_PROGRESS'|'INVALID',
     *     details?: PaymentInstrumentDetails|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
