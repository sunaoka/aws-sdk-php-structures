<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementCancellationRequest;

trait CancelAgreementCancellationRequestTrait
{
    /**
     * @param CancelAgreementCancellationRequestRequest $args
     * @return CancelAgreementCancellationRequestResponse
     */
    public function cancelAgreementCancellationRequest(CancelAgreementCancellationRequestRequest $args)
    {
        $result = parent::cancelAgreementCancellationRequest($args->toArray());
        return new CancelAgreementCancellationRequestResponse($result->toArray());
    }
}
