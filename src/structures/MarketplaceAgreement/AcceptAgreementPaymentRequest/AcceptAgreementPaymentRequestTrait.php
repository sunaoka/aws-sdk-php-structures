<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementPaymentRequest;

trait AcceptAgreementPaymentRequestTrait
{
    /**
     * @param AcceptAgreementPaymentRequestRequest $args
     * @return AcceptAgreementPaymentRequestResponse
     */
    public function acceptAgreementPaymentRequest(AcceptAgreementPaymentRequestRequest $args)
    {
        $result = parent::acceptAgreementPaymentRequest($args->toArray());
        return new AcceptAgreementPaymentRequestResponse($result->toArray());
    }
}
