<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateJob;

trait TerminateJobTrait
{
    /**
     * @param TerminateJobRequest $args
     * @return TerminateJobResponse
     */
    public function terminateJob(TerminateJobRequest $args)
    {
        $result = parent::terminateJob($args->toArray());
        return new TerminateJobResponse($result->toArray());
    }
}
