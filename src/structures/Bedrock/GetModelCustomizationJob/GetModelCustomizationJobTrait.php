<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob;

trait GetModelCustomizationJobTrait
{
    /**
     * @param GetModelCustomizationJobRequest $args
     * @return GetModelCustomizationJobResponse
     */
    public function getModelCustomizationJob(GetModelCustomizationJobRequest $args)
    {
        $result = parent::getModelCustomizationJob($args->toArray());
        return new GetModelCustomizationJobResponse($result->toArray());
    }
}
