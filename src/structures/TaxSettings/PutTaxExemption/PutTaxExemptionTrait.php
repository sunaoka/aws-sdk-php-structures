<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxExemption;

trait PutTaxExemptionTrait
{
    /**
     * @param PutTaxExemptionRequest $args
     * @return PutTaxExemptionResponse
     */
    public function putTaxExemption(PutTaxExemptionRequest $args)
    {
        $result = parent::putTaxExemption($args->toArray());
        return new PutTaxExemptionResponse($result->toArray());
    }
}
