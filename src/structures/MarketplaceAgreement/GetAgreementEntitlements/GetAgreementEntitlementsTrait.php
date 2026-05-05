<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementEntitlements;

trait GetAgreementEntitlementsTrait
{
    /**
     * @param GetAgreementEntitlementsRequest $args
     * @return GetAgreementEntitlementsResponse
     */
    public function getAgreementEntitlements(GetAgreementEntitlementsRequest $args)
    {
        $result = parent::getAgreementEntitlements($args->toArray());
        return new GetAgreementEntitlementsResponse($result->toArray());
    }
}
