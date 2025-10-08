<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob;

trait CreateCompilationJobTrait
{
    /**
     * @param CreateCompilationJobRequest $args
     * @return CreateCompilationJobResponse
     */
    public function createCompilationJob(CreateCompilationJobRequest $args)
    {
        $result = parent::createCompilationJob($args->toArray());
        return new CreateCompilationJobResponse($result->toArray());
    }
}
