<?php

namespace Sunaoka\Aws\Structures\Backup\StartCopyJob;

trait StartCopyJobTrait
{
    /**
     * @param StartCopyJobRequest $args
     * @return StartCopyJobResponse
     */
    public function startCopyJob(StartCopyJobRequest $args)
    {
        $result = parent::startCopyJob($args->toArray());
        return new StartCopyJobResponse($result->toArray());
    }
}
