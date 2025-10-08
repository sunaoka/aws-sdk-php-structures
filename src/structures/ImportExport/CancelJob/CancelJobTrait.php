<?php

namespace Sunaoka\Aws\Structures\ImportExport\CancelJob;

trait CancelJobTrait
{
    /**
     * @param CancelJobRequest $args
     * @return CancelJobResponse
     */
    public function cancelJob(CancelJobRequest $args)
    {
        $result = parent::cancelJob($args->toArray());
        return new CancelJobResponse($result->toArray());
    }
}
