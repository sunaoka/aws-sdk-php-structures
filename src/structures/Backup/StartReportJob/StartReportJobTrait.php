<?php

namespace Sunaoka\Aws\Structures\Backup\StartReportJob;

trait StartReportJobTrait
{
    /**
     * @param StartReportJobRequest $args
     * @return StartReportJobResponse
     */
    public function startReportJob(StartReportJobRequest $args)
    {
        $result = parent::startReportJob($args->toArray());
        return new StartReportJobResponse($result->toArray());
    }
}
