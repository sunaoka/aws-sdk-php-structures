<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StopSearchJob;

trait StopSearchJobTrait
{
    /**
     * @param StopSearchJobRequest $args
     * @return StopSearchJobResponse
     */
    public function stopSearchJob(StopSearchJobRequest $args)
    {
        $result = parent::stopSearchJob($args->toArray());
        return new StopSearchJobResponse($result->toArray());
    }
}
