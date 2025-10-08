<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps;

trait ListPipelineExecutionStepsTrait
{
    /**
     * @param ListPipelineExecutionStepsRequest $args
     * @return ListPipelineExecutionStepsResponse
     */
    public function listPipelineExecutionSteps(ListPipelineExecutionStepsRequest $args)
    {
        $result = parent::listPipelineExecutionSteps($args->toArray());
        return new ListPipelineExecutionStepsResponse($result->toArray());
    }
}
