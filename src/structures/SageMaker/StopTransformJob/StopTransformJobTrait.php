<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopTransformJob;

trait StopTransformJobTrait
{
    /**
     * @param StopTransformJobRequest $args
     * @return void
     */
    public function stopTransformJob(StopTransformJobRequest $args)
    {
        parent::stopTransformJob($args->toArray());
    }
}
