<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementRequest;

trait CancelAgreementRequestTrait
{
    /**
     * @param CancelAgreementRequestRequest $args
     * @return CancelAgreementRequestResponse
     */
    public function cancelAgreementRequest(CancelAgreementRequestRequest $args)
    {
        $result = parent::cancelAgreementRequest($args->toArray());
        return new CancelAgreementRequestResponse($result->toArray());
    }
}
