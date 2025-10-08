<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateMaintenanceWindow;

trait CreateMaintenanceWindowTrait
{
    /**
     * @param CreateMaintenanceWindowRequest $args
     * @return CreateMaintenanceWindowResponse
     */
    public function createMaintenanceWindow(CreateMaintenanceWindowRequest $args)
    {
        $result = parent::createMaintenanceWindow($args->toArray());
        return new CreateMaintenanceWindowResponse($result->toArray());
    }
}
