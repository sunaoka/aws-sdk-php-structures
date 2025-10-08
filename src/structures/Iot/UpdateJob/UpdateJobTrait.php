<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateJob;

trait UpdateJobTrait
{
    /**
     * @param UpdateJobRequest $args
     * @return void
     */
    public function updateJob(UpdateJobRequest $args)
    {
        parent::updateJob($args->toArray());
    }
}
