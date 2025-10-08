<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration;

trait PutTaxRegistrationTrait
{
    /**
     * @param PutTaxRegistrationRequest $args
     * @return PutTaxRegistrationResponse
     */
    public function putTaxRegistration(PutTaxRegistrationRequest $args)
    {
        $result = parent::putTaxRegistration($args->toArray());
        return new PutTaxRegistrationResponse($result->toArray());
    }
}
