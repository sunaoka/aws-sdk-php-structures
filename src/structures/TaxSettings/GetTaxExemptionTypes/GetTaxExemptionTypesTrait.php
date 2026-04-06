<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxExemptionTypes;

trait GetTaxExemptionTypesTrait
{
    /**
     * @param GetTaxExemptionTypesRequest $args
     * @return GetTaxExemptionTypesResponse
     */
    public function getTaxExemptionTypes(GetTaxExemptionTypesRequest $args)
    {
        $result = parent::getTaxExemptionTypes($args->toArray());
        return new GetTaxExemptionTypesResponse($result->toArray());
    }
}
