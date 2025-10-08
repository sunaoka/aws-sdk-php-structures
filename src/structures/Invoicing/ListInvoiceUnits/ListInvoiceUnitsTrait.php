<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceUnits;

trait ListInvoiceUnitsTrait
{
    /**
     * @param ListInvoiceUnitsRequest $args
     * @return ListInvoiceUnitsResponse
     */
    public function listInvoiceUnits(ListInvoiceUnitsRequest $args)
    {
        $result = parent::listInvoiceUnits($args->toArray());
        return new ListInvoiceUnitsResponse($result->toArray());
    }
}
