<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopCompilationJob;

trait StopCompilationJobTrait
{
    /**
     * @param StopCompilationJobRequest $args
     * @return void
     */
    public function stopCompilationJob(StopCompilationJobRequest $args)
    {
        parent::stopCompilationJob($args->toArray());
    }
}
