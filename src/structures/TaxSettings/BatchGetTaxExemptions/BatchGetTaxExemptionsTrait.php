<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions;

trait BatchGetTaxExemptionsTrait
{
    /**
     * @param BatchGetTaxExemptionsRequest $args
     * @return BatchGetTaxExemptionsResponse
     */
    public function batchGetTaxExemptions(BatchGetTaxExemptionsRequest $args)
    {
        $result = parent::batchGetTaxExemptions($args->toArray());
        return new BatchGetTaxExemptionsResponse($result->toArray());
    }
}
