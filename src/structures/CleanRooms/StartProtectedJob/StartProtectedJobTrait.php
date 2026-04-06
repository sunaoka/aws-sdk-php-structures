<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob;

trait StartProtectedJobTrait
{
    /**
     * @param StartProtectedJobRequest $args
     * @return StartProtectedJobResponse
     */
    public function startProtectedJob(StartProtectedJobRequest $args)
    {
        $result = parent::startProtectedJob($args->toArray());
        return new StartProtectedJobResponse($result->toArray());
    }
}
