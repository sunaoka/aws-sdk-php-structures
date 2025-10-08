<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration;

trait GetTaxRegistrationTrait
{
    /**
     * @param GetTaxRegistrationRequest $args
     * @return GetTaxRegistrationResponse
     */
    public function getTaxRegistration(GetTaxRegistrationRequest $args)
    {
        $result = parent::getTaxRegistration($args->toArray());
        return new GetTaxRegistrationResponse($result->toArray());
    }
}
