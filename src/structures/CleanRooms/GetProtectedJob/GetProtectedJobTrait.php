<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob;

trait GetProtectedJobTrait
{
    /**
     * @param GetProtectedJobRequest $args
     * @return GetProtectedJobResponse
     */
    public function getProtectedJob(GetProtectedJobRequest $args)
    {
        $result = parent::getProtectedJob($args->toArray());
        return new GetProtectedJobResponse($result->toArray());
    }
}
