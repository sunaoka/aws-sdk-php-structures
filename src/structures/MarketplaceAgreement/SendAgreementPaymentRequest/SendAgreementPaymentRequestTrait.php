<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SendAgreementPaymentRequest;

trait SendAgreementPaymentRequestTrait
{
    /**
     * @param SendAgreementPaymentRequestRequest $args
     * @return SendAgreementPaymentRequestResponse
     */
    public function sendAgreementPaymentRequest(SendAgreementPaymentRequestRequest $args)
    {
        $result = parent::sendAgreementPaymentRequest($args->toArray());
        return new SendAgreementPaymentRequestResponse($result->toArray());
    }
}
