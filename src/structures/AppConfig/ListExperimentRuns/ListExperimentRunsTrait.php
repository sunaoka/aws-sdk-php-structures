<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentRuns;

trait ListExperimentRunsTrait
{
    /**
     * @param ListExperimentRunsRequest $args
     * @return ListExperimentRunsResponse
     */
    public function listExperimentRuns(ListExperimentRunsRequest $args)
    {
        $result = parent::listExperimentRuns($args->toArray());
        return new ListExperimentRunsResponse($result->toArray());
    }
}
