<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxExemptions;

trait ListTaxExemptionsTrait
{
    /**
     * @param ListTaxExemptionsRequest $args
     * @return ListTaxExemptionsResponse
     */
    public function listTaxExemptions(ListTaxExemptionsRequest $args)
    {
        $result = parent::listTaxExemptions($args->toArray());
        return new ListTaxExemptionsResponse($result->toArray());
    }
}
