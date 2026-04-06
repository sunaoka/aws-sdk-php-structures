<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms;

trait GetAgreementTermsTrait
{
    /**
     * @param GetAgreementTermsRequest $args
     * @return GetAgreementTermsResponse
     */
    public function getAgreementTerms(GetAgreementTermsRequest $args)
    {
        $result = parent::getAgreementTerms($args->toArray());
        return new GetAgreementTermsResponse($result->toArray());
    }
}
