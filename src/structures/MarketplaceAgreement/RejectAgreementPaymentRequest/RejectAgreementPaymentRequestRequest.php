<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementPaymentRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentRequestId
 * @property string $agreementId
 * @property string|null $rejectionReason
 */
class RejectAgreementPaymentRequestRequest extends Request
{
    /**
     * @param array{
     *     paymentRequestId: string,
     *     agreementId: string,
     *     rejectionReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
