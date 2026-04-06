<?php

namespace Sunaoka\Aws\Structures\Invoicing\DeleteInvoiceUnit;

trait DeleteInvoiceUnitTrait
{
    /**
     * @param DeleteInvoiceUnitRequest $args
     * @return DeleteInvoiceUnitResponse
     */
    public function deleteInvoiceUnit(DeleteInvoiceUnitRequest $args)
    {
        $result = parent::deleteInvoiceUnit($args->toArray());
        return new DeleteInvoiceUnitResponse($result->toArray());
    }
}
