<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob;

trait StartSearchJobTrait
{
    /**
     * @param StartSearchJobRequest $args
     * @return StartSearchJobResponse
     */
    public function startSearchJob(StartSearchJobRequest $args)
    {
        $result = parent::startSearchJob($args->toArray());
        return new StartSearchJobResponse($result->toArray());
    }
}
