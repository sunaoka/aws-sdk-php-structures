<?php

namespace Sunaoka\Aws\Structures\WorkMail\CancelMailboxExportJob;

trait CancelMailboxExportJobTrait
{
    /**
     * @param CancelMailboxExportJobRequest $args
     * @return CancelMailboxExportJobResponse
     */
    public function cancelMailboxExportJob(CancelMailboxExportJobRequest $args)
    {
        $result = parent::cancelMailboxExportJob($args->toArray());
        return new CancelMailboxExportJobResponse($result->toArray());
    }
}
