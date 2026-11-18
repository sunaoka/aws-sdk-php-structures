<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestTerms;

trait GetAgreementRequestTermsTrait
{
    /**
     * @param GetAgreementRequestTermsRequest $args
     * @return GetAgreementRequestTermsResponse
     */
    public function getAgreementRequestTerms(GetAgreementRequestTermsRequest $args)
    {
        $result = parent::getAgreementRequestTerms($args->toArray());
        return new GetAgreementRequestTermsResponse($result->toArray());
    }
}
