<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStageSessions;

trait ListStageSessionsTrait
{
    /**
     * @param ListStageSessionsRequest $args
     * @return ListStageSessionsResponse
     */
    public function listStageSessions(ListStageSessionsRequest $args)
    {
        $result = parent::listStageSessions($args->toArray());
        return new ListStageSessionsResponse($result->toArray());
    }
}
