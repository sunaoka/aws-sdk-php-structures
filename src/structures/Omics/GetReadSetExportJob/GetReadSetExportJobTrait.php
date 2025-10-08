<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetExportJob;

trait GetReadSetExportJobTrait
{
    /**
     * @param GetReadSetExportJobRequest $args
     * @return GetReadSetExportJobResponse
     */
    public function getReadSetExportJob(GetReadSetExportJobRequest $args)
    {
        $result = parent::getReadSetExportJob($args->toArray());
        return new GetReadSetExportJobResponse($result->toArray());
    }
}
