<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopJob;

trait StopJobTrait
{
    /**
     * @param StopJobRequest $args
     * @return StopJobResponse
     */
    public function stopJob(StopJobRequest $args)
    {
        $result = parent::stopJob($args->toArray());
        return new StopJobResponse($result->toArray());
    }
}
