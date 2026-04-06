<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListPendingMaintenanceActions;

trait ListPendingMaintenanceActionsTrait
{
    /**
     * @param ListPendingMaintenanceActionsRequest $args
     * @return ListPendingMaintenanceActionsResponse
     */
    public function listPendingMaintenanceActions(ListPendingMaintenanceActionsRequest $args)
    {
        $result = parent::listPendingMaintenanceActions($args->toArray());
        return new ListPendingMaintenanceActionsResponse($result->toArray());
    }
}
