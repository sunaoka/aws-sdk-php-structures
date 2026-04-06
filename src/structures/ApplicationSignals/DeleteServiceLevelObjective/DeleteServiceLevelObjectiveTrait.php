<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\DeleteServiceLevelObjective;

trait DeleteServiceLevelObjectiveTrait
{
    /**
     * @param DeleteServiceLevelObjectiveRequest $args
     * @return DeleteServiceLevelObjectiveResponse
     */
    public function deleteServiceLevelObjective(DeleteServiceLevelObjectiveRequest $args)
    {
        $result = parent::deleteServiceLevelObjective($args->toArray());
        return new DeleteServiceLevelObjectiveResponse($result->toArray());
    }
}
