<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectiveExclusionWindows;

trait ListServiceLevelObjectiveExclusionWindowsTrait
{
    /**
     * @param ListServiceLevelObjectiveExclusionWindowsRequest $args
     * @return ListServiceLevelObjectiveExclusionWindowsResponse
     */
    public function listServiceLevelObjectiveExclusionWindows(ListServiceLevelObjectiveExclusionWindowsRequest $args)
    {
        $result = parent::listServiceLevelObjectiveExclusionWindows($args->toArray());
        return new ListServiceLevelObjectiveExclusionWindowsResponse($result->toArray());
    }
}
