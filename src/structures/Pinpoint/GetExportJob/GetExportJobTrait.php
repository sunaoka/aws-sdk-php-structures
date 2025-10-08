<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetExportJob;

trait GetExportJobTrait
{
    /**
     * @param GetExportJobRequest $args
     * @return GetExportJobResponse
     */
    public function getExportJob(GetExportJobRequest $args)
    {
        $result = parent::getExportJob($args->toArray());
        return new GetExportJobResponse($result->toArray());
    }
}
