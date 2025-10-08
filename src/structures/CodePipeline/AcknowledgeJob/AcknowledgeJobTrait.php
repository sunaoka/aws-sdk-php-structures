<?php

namespace Sunaoka\Aws\Structures\CodePipeline\AcknowledgeJob;

trait AcknowledgeJobTrait
{
    /**
     * @param AcknowledgeJobRequest $args
     * @return AcknowledgeJobResponse
     */
    public function acknowledgeJob(AcknowledgeJobRequest $args)
    {
        $result = parent::acknowledgeJob($args->toArray());
        return new AcknowledgeJobResponse($result->toArray());
    }
}
