<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCopyJob;

trait GetModelCopyJobTrait
{
    /**
     * @param GetModelCopyJobRequest $args
     * @return GetModelCopyJobResponse
     */
    public function getModelCopyJob(GetModelCopyJobRequest $args)
    {
        $result = parent::getModelCopyJob($args->toArray());
        return new GetModelCopyJobResponse($result->toArray());
    }
}
