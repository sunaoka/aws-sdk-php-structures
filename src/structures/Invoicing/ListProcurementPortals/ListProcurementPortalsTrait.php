<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortals;

trait ListProcurementPortalsTrait
{
    /**
     * @param ListProcurementPortalsRequest $args
     * @return ListProcurementPortalsResponse
     */
    public function listProcurementPortals(ListProcurementPortalsRequest $args)
    {
        $result = parent::listProcurementPortals($args->toArray());
        return new ListProcurementPortalsResponse($result->toArray());
    }
}
