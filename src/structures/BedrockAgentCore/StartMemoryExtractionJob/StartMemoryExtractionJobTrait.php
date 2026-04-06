<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartMemoryExtractionJob;

trait StartMemoryExtractionJobTrait
{
    /**
     * @param StartMemoryExtractionJobRequest $args
     * @return StartMemoryExtractionJobResponse
     */
    public function startMemoryExtractionJob(StartMemoryExtractionJobRequest $args)
    {
        $result = parent::startMemoryExtractionJob($args->toArray());
        return new StartMemoryExtractionJobResponse($result->toArray());
    }
}
