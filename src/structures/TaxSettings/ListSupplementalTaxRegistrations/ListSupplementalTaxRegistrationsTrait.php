<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListSupplementalTaxRegistrations;

trait ListSupplementalTaxRegistrationsTrait
{
    /**
     * @param ListSupplementalTaxRegistrationsRequest $args
     * @return ListSupplementalTaxRegistrationsResponse
     */
    public function listSupplementalTaxRegistrations(ListSupplementalTaxRegistrationsRequest $args)
    {
        $result = parent::listSupplementalTaxRegistrations($args->toArray());
        return new ListSupplementalTaxRegistrationsResponse($result->toArray());
    }
}
