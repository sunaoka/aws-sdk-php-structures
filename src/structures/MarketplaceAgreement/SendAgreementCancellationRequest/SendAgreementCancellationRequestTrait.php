<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SendAgreementCancellationRequest;

trait SendAgreementCancellationRequestTrait
{
    /**
     * @param SendAgreementCancellationRequestRequest $args
     * @return SendAgreementCancellationRequestResponse
     */
    public function sendAgreementCancellationRequest(SendAgreementCancellationRequestRequest $args)
    {
        $result = parent::sendAgreementCancellationRequest($args->toArray());
        return new SendAgreementCancellationRequestResponse($result->toArray());
    }
}
