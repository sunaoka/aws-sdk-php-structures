<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxInheritance;

trait PutTaxInheritanceTrait
{
    /**
     * @param PutTaxInheritanceRequest $args
     * @return PutTaxInheritanceResponse
     */
    public function putTaxInheritance(PutTaxInheritanceRequest $args)
    {
        $result = parent::putTaxInheritance($args->toArray());
        return new PutTaxInheritanceResponse($result->toArray());
    }
}
