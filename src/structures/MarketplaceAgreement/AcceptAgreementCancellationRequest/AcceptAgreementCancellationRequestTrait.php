<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementCancellationRequest;

trait AcceptAgreementCancellationRequestTrait
{
    /**
     * @param AcceptAgreementCancellationRequestRequest $args
     * @return AcceptAgreementCancellationRequestResponse
     */
    public function acceptAgreementCancellationRequest(AcceptAgreementCancellationRequestRequest $args)
    {
        $result = parent::acceptAgreementCancellationRequest($args->toArray());
        return new AcceptAgreementCancellationRequestResponse($result->toArray());
    }
}
