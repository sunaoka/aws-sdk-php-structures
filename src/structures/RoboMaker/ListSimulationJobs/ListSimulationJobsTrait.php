<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationJobs;

trait ListSimulationJobsTrait
{
    /**
     * @param ListSimulationJobsRequest $args
     * @return ListSimulationJobsResponse
     */
    public function listSimulationJobs(ListSimulationJobsRequest $args)
    {
        $result = parent::listSimulationJobs($args->toArray());
        return new ListSimulationJobsResponse($result->toArray());
    }
}
