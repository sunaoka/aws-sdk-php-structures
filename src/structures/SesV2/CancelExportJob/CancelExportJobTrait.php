<?php

namespace Sunaoka\Aws\Structures\SesV2\CancelExportJob;

trait CancelExportJobTrait
{
    /**
     * @param CancelExportJobRequest $args
     * @return CancelExportJobResponse
     */
    public function cancelExportJob(CancelExportJobRequest $args)
    {
        $result = parent::cancelExportJob($args->toArray());
        return new CancelExportJobResponse($result->toArray());
    }
}
