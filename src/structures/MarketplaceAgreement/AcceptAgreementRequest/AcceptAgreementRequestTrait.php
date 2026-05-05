<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementRequest;

trait AcceptAgreementRequestTrait
{
    /**
     * @param AcceptAgreementRequestRequest $args
     * @return AcceptAgreementRequestResponse
     */
    public function acceptAgreementRequest(AcceptAgreementRequestRequest $args)
    {
        $result = parent::acceptAgreementRequest($args->toArray());
        return new AcceptAgreementRequestResponse($result->toArray());
    }
}
