<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateSimulationApplication;

trait UpdateSimulationApplicationTrait
{
    /**
     * @param UpdateSimulationApplicationRequest $args
     * @return UpdateSimulationApplicationResponse
     */
    public function updateSimulationApplication(UpdateSimulationApplicationRequest $args)
    {
        $result = parent::updateSimulationApplication($args->toArray());
        return new UpdateSimulationApplicationResponse($result->toArray());
    }
}
