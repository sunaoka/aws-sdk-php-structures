<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopModelCustomizationJob;

trait StopModelCustomizationJobTrait
{
    /**
     * @param StopModelCustomizationJobRequest $args
     * @return StopModelCustomizationJobResponse
     */
    public function stopModelCustomizationJob(StopModelCustomizationJobRequest $args)
    {
        $result = parent::stopModelCustomizationJob($args->toArray());
        return new StopModelCustomizationJobResponse($result->toArray());
    }
}
