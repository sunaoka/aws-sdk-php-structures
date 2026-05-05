<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementPaymentRequest;

trait RejectAgreementPaymentRequestTrait
{
    /**
     * @param RejectAgreementPaymentRequestRequest $args
     * @return RejectAgreementPaymentRequestResponse
     */
    public function rejectAgreementPaymentRequest(RejectAgreementPaymentRequestRequest $args)
    {
        $result = parent::rejectAgreementPaymentRequest($args->toArray());
        return new RejectAgreementPaymentRequestResponse($result->toArray());
    }
}
