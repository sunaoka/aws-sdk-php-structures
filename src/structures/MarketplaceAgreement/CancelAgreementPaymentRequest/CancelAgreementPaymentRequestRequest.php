<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementPaymentRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentRequestId
 * @property string $agreementId
 */
class CancelAgreementPaymentRequestRequest extends Request
{
    /**
     * @param array{
     *     paymentRequestId: string,
     *     agreementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
