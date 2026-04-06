<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchDeleteTaxRegistration;

trait BatchDeleteTaxRegistrationTrait
{
    /**
     * @param BatchDeleteTaxRegistrationRequest $args
     * @return BatchDeleteTaxRegistrationResponse
     */
    public function batchDeleteTaxRegistration(BatchDeleteTaxRegistrationRequest $args)
    {
        $result = parent::batchDeleteTaxRegistration($args->toArray());
        return new BatchDeleteTaxRegistrationResponse($result->toArray());
    }
}
