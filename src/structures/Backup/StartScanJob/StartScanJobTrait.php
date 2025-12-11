<?php

namespace Sunaoka\Aws\Structures\Backup\StartScanJob;

trait StartScanJobTrait
{
    /**
     * @param StartScanJobRequest $args
     * @return StartScanJobResponse
     */
    public function startScanJob(StartScanJobRequest $args)
    {
        $result = parent::startScanJob($args->toArray());
        return new StartScanJobResponse($result->toArray());
    }
}
