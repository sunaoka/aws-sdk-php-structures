<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives;

trait ListServiceLevelObjectivesTrait
{
    /**
     * @param ListServiceLevelObjectivesRequest $args
     * @return ListServiceLevelObjectivesResponse
     */
    public function listServiceLevelObjectives(ListServiceLevelObjectivesRequest $args)
    {
        $result = parent::listServiceLevelObjectives($args->toArray());
        return new ListServiceLevelObjectivesResponse($result->toArray());
    }
}
