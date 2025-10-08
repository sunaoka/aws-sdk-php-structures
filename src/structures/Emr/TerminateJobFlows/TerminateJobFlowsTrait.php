<?php

namespace Sunaoka\Aws\Structures\Emr\TerminateJobFlows;

trait TerminateJobFlowsTrait
{
    /**
     * @param TerminateJobFlowsRequest $args
     * @return void
     */
    public function terminateJobFlows(TerminateJobFlowsRequest $args)
    {
        parent::terminateJobFlows($args->toArray());
    }
}
