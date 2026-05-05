<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementPaymentRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentRequestId
 * @property string $agreementId
 * @property string|null $purchaseOrderReference
 */
class AcceptAgreementPaymentRequestRequest extends Request
{
    /**
     * @param array{
     *     paymentRequestId: string,
     *     agreementId: string,
     *     purchaseOrderReference?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
