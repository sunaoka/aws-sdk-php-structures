<?php

namespace Sunaoka\Aws\Structures\Emr\AddJobFlowSteps;

trait AddJobFlowStepsTrait
{
    /**
     * @param AddJobFlowStepsRequest $args
     * @return AddJobFlowStepsResponse
     */
    public function addJobFlowSteps(AddJobFlowStepsRequest $args)
    {
        $result = parent::addJobFlowSteps($args->toArray());
        return new AddJobFlowStepsResponse($result->toArray());
    }
}
