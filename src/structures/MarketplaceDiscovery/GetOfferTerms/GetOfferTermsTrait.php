<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms;

trait GetOfferTermsTrait
{
    /**
     * @param GetOfferTermsRequest $args
     * @return GetOfferTermsResponse
     */
    public function getOfferTerms(GetOfferTermsRequest $args)
    {
        $result = parent::getOfferTerms($args->toArray());
        return new GetOfferTermsResponse($result->toArray());
    }
}
