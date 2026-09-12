<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortalSuppliers;

trait ListProcurementPortalSuppliersTrait
{
    /**
     * @param ListProcurementPortalSuppliersRequest $args
     * @return ListProcurementPortalSuppliersResponse
     */
    public function listProcurementPortalSuppliers(ListProcurementPortalSuppliersRequest $args)
    {
        $result = parent::listProcurementPortalSuppliers($args->toArray());
        return new ListProcurementPortalSuppliersResponse($result->toArray());
    }
}
