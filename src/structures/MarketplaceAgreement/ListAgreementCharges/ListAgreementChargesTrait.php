<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementCharges;

trait ListAgreementChargesTrait
{
    /**
     * @param ListAgreementChargesRequest $args
     * @return ListAgreementChargesResponse
     */
    public function listAgreementCharges(ListAgreementChargesRequest $args)
    {
        $result = parent::listAgreementCharges($args->toArray());
        return new ListAgreementChargesResponse($result->toArray());
    }
}
