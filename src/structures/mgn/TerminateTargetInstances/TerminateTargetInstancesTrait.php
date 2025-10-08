<?php

namespace Sunaoka\Aws\Structures\mgn\TerminateTargetInstances;

trait TerminateTargetInstancesTrait
{
    /**
     * @param TerminateTargetInstancesRequest $args
     * @return TerminateTargetInstancesResponse
     */
    public function terminateTargetInstances(TerminateTargetInstancesRequest $args)
    {
        $result = parent::terminateTargetInstances($args->toArray());
        return new TerminateTargetInstancesResponse($result->toArray());
    }
}
