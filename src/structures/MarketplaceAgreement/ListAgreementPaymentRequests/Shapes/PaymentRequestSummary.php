<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementPaymentRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $paymentRequestId
 * @property string|null $agreementId
 * @property 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|null $status
 * @property string|null $name
 * @property string|null $chargeId
 * @property string|null $chargeAmount
 * @property string|null $currencyCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PaymentRequestSummary extends Shape
{
    /**
     * @param array{
     *     paymentRequestId?: string|null,
     *     agreementId?: string|null,
     *     status?: 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|null,
     *     name?: string|null,
     *     chargeId?: string|null,
     *     chargeAmount?: string|null,
     *     currencyCode?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
