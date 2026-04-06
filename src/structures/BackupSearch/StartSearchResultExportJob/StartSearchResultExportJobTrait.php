<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchResultExportJob;

trait StartSearchResultExportJobTrait
{
    /**
     * @param StartSearchResultExportJobRequest $args
     * @return StartSearchResultExportJobResponse
     */
    public function startSearchResultExportJob(StartSearchResultExportJobRequest $args)
    {
        $result = parent::startSearchResultExportJob($args->toArray());
        return new StartSearchResultExportJobResponse($result->toArray());
    }
}
