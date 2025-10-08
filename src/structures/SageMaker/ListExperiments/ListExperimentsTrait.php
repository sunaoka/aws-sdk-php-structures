<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListExperiments;

trait ListExperimentsTrait
{
    /**
     * @param ListExperimentsRequest $args
     * @return ListExperimentsResponse
     */
    public function listExperiments(ListExperimentsRequest $args)
    {
        $result = parent::listExperiments($args->toArray());
        return new ListExperimentsResponse($result->toArray());
    }
}
