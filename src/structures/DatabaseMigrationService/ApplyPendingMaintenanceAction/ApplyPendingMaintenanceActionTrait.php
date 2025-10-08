<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ApplyPendingMaintenanceAction;

trait ApplyPendingMaintenanceActionTrait
{
    /**
     * @param ApplyPendingMaintenanceActionRequest $args
     * @return ApplyPendingMaintenanceActionResponse
     */
    public function applyPendingMaintenanceAction(ApplyPendingMaintenanceActionRequest $args)
    {
        $result = parent::applyPendingMaintenanceAction($args->toArray());
        return new ApplyPendingMaintenanceActionResponse($result->toArray());
    }
}
