<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationApplications;

trait ListSimulationApplicationsTrait
{
    /**
     * @param ListSimulationApplicationsRequest $args
     * @return ListSimulationApplicationsResponse
     */
    public function listSimulationApplications(ListSimulationApplicationsRequest $args)
    {
        $result = parent::listSimulationApplications($args->toArray());
        return new ListSimulationApplicationsResponse($result->toArray());
    }
}
