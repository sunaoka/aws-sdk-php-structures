<?php

namespace Sunaoka\Aws\Structures\WorkMail\StartMailboxExportJob;

trait StartMailboxExportJobTrait
{
    /**
     * @param StartMailboxExportJobRequest $args
     * @return StartMailboxExportJobResponse
     */
    public function startMailboxExportJob(StartMailboxExportJobRequest $args)
    {
        $result = parent::startMailboxExportJob($args->toArray());
        return new StartMailboxExportJobResponse($result->toArray());
    }
}
