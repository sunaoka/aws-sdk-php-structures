<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective;

trait GetServiceLevelObjectiveTrait
{
    /**
     * @param GetServiceLevelObjectiveRequest $args
     * @return GetServiceLevelObjectiveResponse
     */
    public function getServiceLevelObjective(GetServiceLevelObjectiveRequest $args)
    {
        $result = parent::getServiceLevelObjective($args->toArray());
        return new GetServiceLevelObjectiveResponse($result->toArray());
    }
}
