<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementPaymentRequest;

trait CancelAgreementPaymentRequestTrait
{
    /**
     * @param CancelAgreementPaymentRequestRequest $args
     * @return CancelAgreementPaymentRequestResponse
     */
    public function cancelAgreementPaymentRequest(CancelAgreementPaymentRequestRequest $args)
    {
        $result = parent::cancelAgreementPaymentRequest($args->toArray());
        return new CancelAgreementPaymentRequestResponse($result->toArray());
    }
}
