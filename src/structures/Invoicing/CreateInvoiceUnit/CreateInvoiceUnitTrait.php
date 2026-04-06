<?php

namespace Sunaoka\Aws\Structures\Invoicing\CreateInvoiceUnit;

trait CreateInvoiceUnitTrait
{
    /**
     * @param CreateInvoiceUnitRequest $args
     * @return CreateInvoiceUnitResponse
     */
    public function createInvoiceUnit(CreateInvoiceUnitRequest $args)
    {
        $result = parent::createInvoiceUnit($args->toArray());
        return new CreateInvoiceUnitResponse($result->toArray());
    }
}
