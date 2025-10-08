<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopAutoMLJob;

trait StopAutoMLJobTrait
{
    /**
     * @param StopAutoMLJobRequest $args
     * @return void
     */
    public function stopAutoMLJob(StopAutoMLJobRequest $args)
    {
        parent::stopAutoMLJob($args->toArray());
    }
}
