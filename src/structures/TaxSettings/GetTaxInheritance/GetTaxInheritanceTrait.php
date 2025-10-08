<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxInheritance;

trait GetTaxInheritanceTrait
{
    /**
     * @param GetTaxInheritanceRequest $args
     * @return GetTaxInheritanceResponse
     */
    public function getTaxInheritance(GetTaxInheritanceRequest $args)
    {
        $result = parent::getTaxInheritance($args->toArray());
        return new GetTaxInheritanceResponse($result->toArray());
    }
}
