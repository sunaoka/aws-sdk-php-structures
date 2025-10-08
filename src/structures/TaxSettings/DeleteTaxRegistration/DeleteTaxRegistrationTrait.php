<?php

namespace Sunaoka\Aws\Structures\TaxSettings\DeleteTaxRegistration;

trait DeleteTaxRegistrationTrait
{
    /**
     * @param DeleteTaxRegistrationRequest $args
     * @return DeleteTaxRegistrationResponse
     */
    public function deleteTaxRegistration(DeleteTaxRegistrationRequest $args)
    {
        $result = parent::deleteTaxRegistration($args->toArray());
        return new DeleteTaxRegistrationResponse($result->toArray());
    }
}
