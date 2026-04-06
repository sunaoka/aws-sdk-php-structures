<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementCancellationRequest;

trait GetAgreementCancellationRequestTrait
{
    /**
     * @param GetAgreementCancellationRequestRequest $args
     * @return GetAgreementCancellationRequestResponse
     */
    public function getAgreementCancellationRequest(GetAgreementCancellationRequestRequest $args)
    {
        $result = parent::getAgreementCancellationRequest($args->toArray());
        return new GetAgreementCancellationRequestResponse($result->toArray());
    }
}
