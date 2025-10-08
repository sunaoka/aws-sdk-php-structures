<?php

namespace Sunaoka\Aws\Structures\Invoicing\UpdateInvoiceUnit;

trait UpdateInvoiceUnitTrait
{
    /**
     * @param UpdateInvoiceUnitRequest $args
     * @return UpdateInvoiceUnitResponse
     */
    public function updateInvoiceUnit(UpdateInvoiceUnitRequest $args)
    {
        $result = parent::updateInvoiceUnit($args->toArray());
        return new UpdateInvoiceUnitResponse($result->toArray());
    }
}
