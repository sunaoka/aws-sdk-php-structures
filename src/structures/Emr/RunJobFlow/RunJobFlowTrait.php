<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow;

trait RunJobFlowTrait
{
    /**
     * @param RunJobFlowRequest $args
     * @return RunJobFlowResponse
     */
    public function runJobFlow(RunJobFlowRequest $args)
    {
        $result = parent::runJobFlow($args->toArray());
        return new RunJobFlowResponse($result->toArray());
    }
}
