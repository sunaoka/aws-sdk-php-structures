<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutSupplementalTaxRegistration;

trait PutSupplementalTaxRegistrationTrait
{
    /**
     * @param PutSupplementalTaxRegistrationRequest $args
     * @return PutSupplementalTaxRegistrationResponse
     */
    public function putSupplementalTaxRegistration(PutSupplementalTaxRegistrationRequest $args)
    {
        $result = parent::putSupplementalTaxRegistration($args->toArray());
        return new PutSupplementalTaxRegistrationResponse($result->toArray());
    }
}
