<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchResultExportJob;

trait GetSearchResultExportJobTrait
{
    /**
     * @param GetSearchResultExportJobRequest $args
     * @return GetSearchResultExportJobResponse
     */
    public function getSearchResultExportJob(GetSearchResultExportJobRequest $args)
    {
        $result = parent::getSearchResultExportJob($args->toArray());
        return new GetSearchResultExportJobResponse($result->toArray());
    }
}
