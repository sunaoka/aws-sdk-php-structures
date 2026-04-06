<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCopyJob;

trait CreateModelCopyJobTrait
{
    /**
     * @param CreateModelCopyJobRequest $args
     * @return CreateModelCopyJobResponse
     */
    public function createModelCopyJob(CreateModelCopyJobRequest $args)
    {
        $result = parent::createModelCopyJob($args->toArray());
        return new CreateModelCopyJobResponse($result->toArray());
    }
}
