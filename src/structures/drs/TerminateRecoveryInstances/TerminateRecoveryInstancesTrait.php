<?php

namespace Sunaoka\Aws\Structures\drs\TerminateRecoveryInstances;

trait TerminateRecoveryInstancesTrait
{
    /**
     * @param TerminateRecoveryInstancesRequest $args
     * @return TerminateRecoveryInstancesResponse
     */
    public function terminateRecoveryInstances(TerminateRecoveryInstancesRequest $args)
    {
        $result = parent::terminateRecoveryInstances($args->toArray());
        return new TerminateRecoveryInstancesResponse($result->toArray());
    }
}
