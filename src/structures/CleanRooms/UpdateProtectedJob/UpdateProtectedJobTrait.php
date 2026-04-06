<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob;

trait UpdateProtectedJobTrait
{
    /**
     * @param UpdateProtectedJobRequest $args
     * @return UpdateProtectedJobResponse
     */
    public function updateProtectedJob(UpdateProtectedJobRequest $args)
    {
        $result = parent::updateProtectedJob($args->toArray());
        return new UpdateProtectedJobResponse($result->toArray());
    }
}
