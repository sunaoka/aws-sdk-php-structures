<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoiceUnit;

trait GetInvoiceUnitTrait
{
    /**
     * @param GetInvoiceUnitRequest $args
     * @return GetInvoiceUnitResponse
     */
    public function getInvoiceUnit(GetInvoiceUnitRequest $args)
    {
        $result = parent::getInvoiceUnit($args->toArray());
        return new GetInvoiceUnitResponse($result->toArray());
    }
}
