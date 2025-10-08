<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob;

trait StartBatchJobTrait
{
    /**
     * @param StartBatchJobRequest $args
     * @return StartBatchJobResponse
     */
    public function startBatchJob(StartBatchJobRequest $args)
    {
        $result = parent::startBatchJob($args->toArray());
        return new StartBatchJobResponse($result->toArray());
    }
}
