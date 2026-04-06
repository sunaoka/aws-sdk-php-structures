<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeFleetRoleForWorker;

trait AssumeFleetRoleForWorkerTrait
{
    /**
     * @param AssumeFleetRoleForWorkerRequest $args
     * @return AssumeFleetRoleForWorkerResponse
     */
    public function assumeFleetRoleForWorker(AssumeFleetRoleForWorkerRequest $args)
    {
        $result = parent::assumeFleetRoleForWorker($args->toArray());
        return new AssumeFleetRoleForWorkerResponse($result->toArray());
    }
}
