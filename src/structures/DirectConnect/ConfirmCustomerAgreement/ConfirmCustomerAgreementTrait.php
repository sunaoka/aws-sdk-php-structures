<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmCustomerAgreement;

trait ConfirmCustomerAgreementTrait
{
    /**
     * @param ConfirmCustomerAgreementRequest $args
     * @return ConfirmCustomerAgreementResponse
     */
    public function confirmCustomerAgreement(ConfirmCustomerAgreementRequest $args)
    {
        $result = parent::confirmCustomerAgreement($args->toArray());
        return new ConfirmCustomerAgreementResponse($result->toArray());
    }
}
