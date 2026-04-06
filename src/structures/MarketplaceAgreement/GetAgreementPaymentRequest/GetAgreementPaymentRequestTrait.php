<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementPaymentRequest;

trait GetAgreementPaymentRequestTrait
{
    /**
     * @param GetAgreementPaymentRequestRequest $args
     * @return GetAgreementPaymentRequestResponse
     */
    public function getAgreementPaymentRequest(GetAgreementPaymentRequestRequest $args)
    {
        $result = parent::getAgreementPaymentRequest($args->toArray());
        return new GetAgreementPaymentRequestResponse($result->toArray());
    }
}
