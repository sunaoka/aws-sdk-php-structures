<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteCompilationJob;

trait DeleteCompilationJobTrait
{
    /**
     * @param DeleteCompilationJobRequest $args
     * @return void
     */
    public function deleteCompilationJob(DeleteCompilationJobRequest $args)
    {
        parent::deleteCompilationJob($args->toArray());
    }
}
