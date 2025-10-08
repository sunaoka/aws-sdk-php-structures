<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob;

trait SubmitJobTrait
{
    /**
     * @param SubmitJobRequest $args
     * @return SubmitJobResponse
     */
    public function submitJob(SubmitJobRequest $args)
    {
        $result = parent::submitJob($args->toArray());
        return new SubmitJobResponse($result->toArray());
    }
}
