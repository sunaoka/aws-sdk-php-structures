<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitServiceJob;

trait SubmitServiceJobTrait
{
    /**
     * @param SubmitServiceJobRequest $args
     * @return SubmitServiceJobResponse
     */
    public function submitServiceJob(SubmitServiceJobRequest $args)
    {
        $result = parent::submitServiceJob($args->toArray());
        return new SubmitServiceJobResponse($result->toArray());
    }
}
