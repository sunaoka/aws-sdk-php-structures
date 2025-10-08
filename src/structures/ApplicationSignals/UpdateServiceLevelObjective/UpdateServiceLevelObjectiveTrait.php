<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective;

trait UpdateServiceLevelObjectiveTrait
{
    /**
     * @param UpdateServiceLevelObjectiveRequest $args
     * @return UpdateServiceLevelObjectiveResponse
     */
    public function updateServiceLevelObjective(UpdateServiceLevelObjectiveRequest $args)
    {
        $result = parent::updateServiceLevelObjective($args->toArray());
        return new UpdateServiceLevelObjectiveResponse($result->toArray());
    }
}
