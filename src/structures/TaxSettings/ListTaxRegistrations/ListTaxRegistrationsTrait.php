<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations;

trait ListTaxRegistrationsTrait
{
    /**
     * @param ListTaxRegistrationsRequest $args
     * @return ListTaxRegistrationsResponse
     */
    public function listTaxRegistrations(ListTaxRegistrationsRequest $args)
    {
        $result = parent::listTaxRegistrations($args->toArray());
        return new ListTaxRegistrationsResponse($result->toArray());
    }
}
