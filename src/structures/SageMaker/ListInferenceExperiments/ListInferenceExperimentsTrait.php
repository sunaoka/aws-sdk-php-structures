<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceExperiments;

trait ListInferenceExperimentsTrait
{
    /**
     * @param ListInferenceExperimentsRequest $args
     * @return ListInferenceExperimentsResponse
     */
    public function listInferenceExperiments(ListInferenceExperimentsRequest $args)
    {
        $result = parent::listInferenceExperiments($args->toArray());
        return new ListInferenceExperimentsResponse($result->toArray());
    }
}
