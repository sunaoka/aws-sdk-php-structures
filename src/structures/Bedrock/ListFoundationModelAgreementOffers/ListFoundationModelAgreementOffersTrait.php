<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers;

trait ListFoundationModelAgreementOffersTrait
{
    /**
     * @param ListFoundationModelAgreementOffersRequest $args
     * @return ListFoundationModelAgreementOffersResponse
     */
    public function listFoundationModelAgreementOffers(ListFoundationModelAgreementOffersRequest $args)
    {
        $result = parent::listFoundationModelAgreementOffers($args->toArray());
        return new ListFoundationModelAgreementOffersResponse($result->toArray());
    }
}
