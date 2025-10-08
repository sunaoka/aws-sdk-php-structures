<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob;

trait CreateTransformJobTrait
{
    /**
     * @param CreateTransformJobRequest $args
     * @return CreateTransformJobResponse
     */
    public function createTransformJob(CreateTransformJobRequest $args)
    {
        $result = parent::createTransformJob($args->toArray());
        return new CreateTransformJobResponse($result->toArray());
    }
}
