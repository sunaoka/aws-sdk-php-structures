<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreement;

trait CancelAgreementTrait
{
    /**
     * @param CancelAgreementRequest $args
     * @return CancelAgreementResponse
     */
    public function cancelAgreement(CancelAgreementRequest $args)
    {
        $result = parent::cancelAgreement($args->toArray());
        return new CancelAgreementResponse($result->toArray());
    }
}
