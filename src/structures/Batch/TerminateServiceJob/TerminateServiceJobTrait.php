<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateServiceJob;

trait TerminateServiceJobTrait
{
    /**
     * @param TerminateServiceJobRequest $args
     * @return TerminateServiceJobResponse
     */
    public function terminateServiceJob(TerminateServiceJobRequest $args)
    {
        $result = parent::terminateServiceJob($args->toArray());
        return new TerminateServiceJobResponse($result->toArray());
    }
}
