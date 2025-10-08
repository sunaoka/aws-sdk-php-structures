<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetPendingMaintenanceAction;

trait GetPendingMaintenanceActionTrait
{
    /**
     * @param GetPendingMaintenanceActionRequest $args
     * @return GetPendingMaintenanceActionResponse
     */
    public function getPendingMaintenanceAction(GetPendingMaintenanceActionRequest $args)
    {
        $result = parent::getPendingMaintenanceAction($args->toArray());
        return new GetPendingMaintenanceActionResponse($result->toArray());
    }
}
