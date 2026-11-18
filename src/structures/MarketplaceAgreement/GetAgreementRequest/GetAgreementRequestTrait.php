<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequest;

trait GetAgreementRequestTrait
{
    /**
     * @param GetAgreementRequestRequest $args
     * @return GetAgreementRequestResponse
     */
    public function getAgreementRequest(GetAgreementRequestRequest $args)
    {
        $result = parent::getAgreementRequest($args->toArray());
        return new GetAgreementRequestResponse($result->toArray());
    }
}
