<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgePackagingJob;

trait CreateEdgePackagingJobTrait
{
    /**
     * @param CreateEdgePackagingJobRequest $args
     * @return void
     */
    public function createEdgePackagingJob(CreateEdgePackagingJobRequest $args)
    {
        parent::createEdgePackagingJob($args->toArray());
    }
}
