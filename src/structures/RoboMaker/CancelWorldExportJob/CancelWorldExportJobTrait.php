<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelWorldExportJob;

trait CancelWorldExportJobTrait
{
    /**
     * @param CancelWorldExportJobRequest $args
     * @return CancelWorldExportJobResponse
     */
    public function cancelWorldExportJob(CancelWorldExportJobRequest $args)
    {
        $result = parent::cancelWorldExportJob($args->toArray());
        return new CancelWorldExportJobResponse($result->toArray());
    }
}
