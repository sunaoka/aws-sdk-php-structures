<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StartIngestionJob;

trait StartIngestionJobTrait
{
    /**
     * @param StartIngestionJobRequest $args
     * @return StartIngestionJobResponse
     */
    public function startIngestionJob(StartIngestionJobRequest $args)
    {
        $result = parent::startIngestionJob($args->toArray());
        return new StartIngestionJobResponse($result->toArray());
    }
}
