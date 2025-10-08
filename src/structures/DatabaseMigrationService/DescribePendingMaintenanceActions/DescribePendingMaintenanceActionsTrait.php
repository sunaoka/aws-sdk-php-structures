<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribePendingMaintenanceActions;

trait DescribePendingMaintenanceActionsTrait
{
    /**
     * @param DescribePendingMaintenanceActionsRequest $args
     * @return DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActions(DescribePendingMaintenanceActionsRequest $args)
    {
        $result = parent::describePendingMaintenanceActions($args->toArray());
        return new DescribePendingMaintenanceActionsResponse($result->toArray());
    }
}
