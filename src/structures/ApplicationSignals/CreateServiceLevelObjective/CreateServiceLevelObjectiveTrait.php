<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective;

trait CreateServiceLevelObjectiveTrait
{
    /**
     * @param CreateServiceLevelObjectiveRequest $args
     * @return CreateServiceLevelObjectiveResponse
     */
    public function createServiceLevelObjective(CreateServiceLevelObjectiveRequest $args)
    {
        $result = parent::createServiceLevelObjective($args->toArray());
        return new CreateServiceLevelObjectiveResponse($result->toArray());
    }
}
