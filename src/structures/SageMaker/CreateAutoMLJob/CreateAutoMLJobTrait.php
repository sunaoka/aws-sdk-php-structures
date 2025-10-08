<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob;

trait CreateAutoMLJobTrait
{
    /**
     * @param CreateAutoMLJobRequest $args
     * @return CreateAutoMLJobResponse
     */
    public function createAutoMLJob(CreateAutoMLJobRequest $args)
    {
        $result = parent::createAutoMLJob($args->toArray());
        return new CreateAutoMLJobResponse($result->toArray());
    }
}
