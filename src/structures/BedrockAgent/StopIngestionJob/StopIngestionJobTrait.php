<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StopIngestionJob;

trait StopIngestionJobTrait
{
    /**
     * @param StopIngestionJobRequest $args
     * @return StopIngestionJobResponse
     */
    public function stopIngestionJob(StopIngestionJobRequest $args)
    {
        $result = parent::stopIngestionJob($args->toArray());
        return new StopIngestionJobResponse($result->toArray());
    }
}
