<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration;

trait BatchPutTaxRegistrationTrait
{
    /**
     * @param BatchPutTaxRegistrationRequest $args
     * @return BatchPutTaxRegistrationResponse
     */
    public function batchPutTaxRegistration(BatchPutTaxRegistrationRequest $args)
    {
        $result = parent::batchPutTaxRegistration($args->toArray());
        return new BatchPutTaxRegistrationResponse($result->toArray());
    }
}
