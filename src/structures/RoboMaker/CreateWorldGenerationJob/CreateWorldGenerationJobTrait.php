<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldGenerationJob;

trait CreateWorldGenerationJobTrait
{
    /**
     * @param CreateWorldGenerationJobRequest $args
     * @return CreateWorldGenerationJobResponse
     */
    public function createWorldGenerationJob(CreateWorldGenerationJobRequest $args)
    {
        $result = parent::createWorldGenerationJob($args->toArray());
        return new CreateWorldGenerationJobResponse($result->toArray());
    }
}
