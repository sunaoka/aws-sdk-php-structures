<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementCancellationRequest;

trait RejectAgreementCancellationRequestTrait
{
    /**
     * @param RejectAgreementCancellationRequestRequest $args
     * @return RejectAgreementCancellationRequestResponse
     */
    public function rejectAgreementCancellationRequest(RejectAgreementCancellationRequestRequest $args)
    {
        $result = parent::rejectAgreementCancellationRequest($args->toArray());
        return new RejectAgreementCancellationRequestResponse($result->toArray());
    }
}
