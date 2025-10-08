<?php

namespace Sunaoka\Aws\Structures\TaxSettings\DeleteSupplementalTaxRegistration;

trait DeleteSupplementalTaxRegistrationTrait
{
    /**
     * @param DeleteSupplementalTaxRegistrationRequest $args
     * @return DeleteSupplementalTaxRegistrationResponse
     */
    public function deleteSupplementalTaxRegistration(DeleteSupplementalTaxRegistrationRequest $args)
    {
        $result = parent::deleteSupplementalTaxRegistration($args->toArray());
        return new DeleteSupplementalTaxRegistrationResponse($result->toArray());
    }
}
