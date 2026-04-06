<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob;

trait CreateModelCustomizationJobTrait
{
    /**
     * @param CreateModelCustomizationJobRequest $args
     * @return CreateModelCustomizationJobResponse
     */
    public function createModelCustomizationJob(CreateModelCustomizationJobRequest $args)
    {
        $result = parent::createModelCustomizationJob($args->toArray());
        return new CreateModelCustomizationJobResponse($result->toArray());
    }
}
